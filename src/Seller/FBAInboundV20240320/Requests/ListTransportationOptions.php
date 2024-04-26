<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ListTransportationOptionsResponse;

/**
 * listTransportationOptions
 */
class ListTransportationOptions extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $inboundPlanId  Identifier to an inbound plan.
     * @param  ?int  $pageSize  The number of transportation options to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     * @param  ?string  $placementOptionId  The placement option to get transportation options for. Either placementOptionId or shipmentId must be specified.
     * @param  ?string  $shipmentId  The shipment to get transportation options for. Either placementOptionId or shipmentId must be specified.
     */
    public function __construct(
        protected string $inboundPlanId,
        protected ?int $pageSize = null,
        protected ?string $paginationToken = null,
        protected ?string $placementOptionId = null,
        protected ?string $shipmentId = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'pageSize' => $this->pageSize,
            'paginationToken' => $this->paginationToken,
            'placementOptionId' => $this->placementOptionId,
            'shipmentId' => $this->shipmentId,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/transportationOptions";
    }

    public function createDtoFromResponse(Response $response): ListTransportationOptionsResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ListTransportationOptionsResponse::class,
            400, 500, 403, 404, 413, 415, 429, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
