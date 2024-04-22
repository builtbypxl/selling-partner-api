<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\CancelInboundPlanResponse;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;

/**
 * cancelInboundPlan
 */
class CancelInboundPlan extends Request
{
	protected Method $method = Method::PUT;


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 */
	public function __construct(
		protected string $inboundPlanId,
	) {
	}


	public function resolveEndpoint(): string
	{
		return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/cancellation";
	}


	public function createDtoFromResponse(Response $response): CancelInboundPlanResponse|ErrorList
	{
		$status = $response->status();
		$responseCls = match ($status) {
		    202 => CancelInboundPlanResponse::class,
		    400, 500, 403, 404, 413, 415, 429, 503 => ErrorList::class,
		    default => throw new Exception("Unhandled response status: {$status}")
		};
		return $responseCls::deserialize($response->json(), $responseCls);
	}
}
