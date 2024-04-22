<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Traits\Body\HasJsonBody;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\SetPackingInformationRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\SetPackingInformationResponse;

/**
 * setPackingInformation
 */
class SetPackingInformation extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param SetPackingInformationRequest $setPackingInformationRequest `setPackingInformation` request.
	 */
	public function __construct(
		protected string $inboundPlanId,
		public SetPackingInformationRequest $setPackingInformationRequest,
	) {
	}


	public function resolveEndpoint(): string
	{
		return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/packingInformation";
	}


	public function createDtoFromResponse(Response $response): SetPackingInformationResponse|ErrorList
	{
		$status = $response->status();
		$responseCls = match ($status) {
		    202 => SetPackingInformationResponse::class,
		    400, 500, 403, 404, 413, 415, 429, 503 => ErrorList::class,
		    default => throw new Exception("Unhandled response status: {$status}")
		};
		return $responseCls::deserialize($response->json(), $responseCls);
	}


	public function defaultBody(): array
	{
		return $this->setPackingInformationRequest->toArray();
	}
}