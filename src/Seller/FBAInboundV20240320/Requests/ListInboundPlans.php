<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ListInboundPlansResponse;

/**
 * listInboundPlans
 */
class ListInboundPlans extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  ?int  $pageSize  The number of inbound plans to return in the response matching the given query.
     * @param  ?string  $paginationToken  A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
     * @param  ?string  $status  The status of an inbound plan.
     * @param  ?string  $sortBy  Sort by field.
     * @param  ?string  $sortOrder  The sort order.
     */
    public function __construct(
        protected ?int $pageSize = null,
        protected ?string $paginationToken = null,
        protected ?string $status = null,
        protected ?string $sortBy = null,
        protected ?string $sortOrder = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'pageSize' => $this->pageSize,
            'paginationToken' => $this->paginationToken,
            'status' => $this->status,
            'sortBy' => $this->sortBy,
            'sortOrder' => $this->sortOrder,
        ]);
    }

    public function resolveEndpoint(): string
    {
        return '/inbound/fba/2024-03-20/inboundPlans';
    }

    public function createDtoFromResponse(Response $response): ListInboundPlansResponse|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => ListInboundPlansResponse::class,
            400, 500, 403, 404, 413, 415, 429, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
