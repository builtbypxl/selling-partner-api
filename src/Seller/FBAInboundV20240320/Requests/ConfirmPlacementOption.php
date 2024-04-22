<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ConfirmPlacementOptionResponse;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;

/**
 * confirmPlacementOption
 */
class ConfirmPlacementOption extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $placementOptionId Identifier to a placement option. A placement option represents the shipment splits and destinations of SKUs.
	 */
	public function __construct(
		protected string $inboundPlanId,
		protected string $placementOptionId,
	) {
	}


	public function resolveEndpoint(): string
	{
		return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/placementOptions/{$this->placementOptionId}/confirmation";
	}


	public function createDtoFromResponse(Response $response): ConfirmPlacementOptionResponse|ErrorList
	{
		$status = $response->status();
		$responseCls = match ($status) {
		    202 => ConfirmPlacementOptionResponse::class,
		    400, 500, 403, 404, 413, 415, 429, 503 => ErrorList::class,
		    default => throw new Exception("Unhandled response status: {$status}")
		};
		return $responseCls::deserialize($response->json(), $responseCls);
	}
}
