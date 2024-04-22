<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\GetSelfShipAppointmentSlotsResponse;

/**
 * getSelfShipAppointmentSlots
 */
class GetSelfShipAppointmentSlots extends Request
{
	protected Method $method = Method::GET;


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $shipmentId Identifier to a shipment. A shipment contains the boxes and units being inbounded.
	 * @param ?int $pageSize The number of self ship appointment slots to return in the response matching the given query.
	 * @param ?string $paginationToken A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
	 */
	public function __construct(
		protected string $inboundPlanId,
		protected string $shipmentId,
		protected ?int $pageSize = null,
		protected ?string $paginationToken = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['pageSize' => $this->pageSize, 'paginationToken' => $this->paginationToken]);
	}


	public function resolveEndpoint(): string
	{
		return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/shipments/{$this->shipmentId}/selfShipAppointmentSlots";
	}


	public function createDtoFromResponse(Response $response): GetSelfShipAppointmentSlotsResponse|ErrorList
	{
		$status = $response->status();
		$responseCls = match ($status) {
		    200 => GetSelfShipAppointmentSlotsResponse::class,
		    400, 500, 403, 404, 413, 415, 429, 503 => ErrorList::class,
		    default => throw new Exception("Unhandled response status: {$status}")
		};
		return $responseCls::deserialize($response->json(), $responseCls);
	}
}