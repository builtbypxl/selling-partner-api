<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\CreateInboundPlanRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\CreateInboundPlanResponse;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;

/**
 * createInboundPlan
 */
class CreateInboundPlan extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	/**
	 * @param CreateInboundPlanRequest $createInboundPlanRequest The `createInboundPlan` request.
	 */
	public function __construct(
		public CreateInboundPlanRequest $createInboundPlanRequest,
	) {
	}


	public function resolveEndpoint(): string
	{
		return "/inbound/fba/2024-03-20/inboundPlans";
	}


	public function createDtoFromResponse(Response $response): CreateInboundPlanResponse|ErrorList
	{
		$status = $response->status();
		$responseCls = match ($status) {
		    202 => CreateInboundPlanResponse::class,
		    400, 500, 403, 404, 413, 415, 429, 503 => ErrorList::class,
		    default => throw new Exception("Unhandled response status: {$status}")
		};
		return $responseCls::deserialize($response->json(), $responseCls);
	}


	public function defaultBody(): array
	{
		return $this->createInboundPlanRequest->toArray();
	}
}
