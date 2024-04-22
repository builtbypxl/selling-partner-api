<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\Shipment;

/**
 * getShipment
 */
class GetShipment extends Request
{
	protected Method $method = Method::GET;


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $shipmentId Identifier to a shipment. A shipment contains the boxes and units being inbounded.
	 */
	public function __construct(
		protected string $inboundPlanId,
		protected string $shipmentId,
	) {
	}


	public function resolveEndpoint(): string
	{
		return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/shipments/{$this->shipmentId}";
	}


	public function createDtoFromResponse(Response $response): Shipment|ErrorList
	{
		$status = $response->status();
		$responseCls = match ($status) {
		    200 => Shipment::class,
		    400, 500, 403, 404, 413, 415, 429, 503 => ErrorList::class,
		    default => throw new Exception("Unhandled response status: {$status}")
		};
		return $responseCls::deserialize($response->json(), $responseCls);
	}
}