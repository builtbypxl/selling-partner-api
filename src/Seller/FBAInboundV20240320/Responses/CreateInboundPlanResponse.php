<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class CreateInboundPlanResponse extends BaseResponse
{
	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $operationId UUID for the given operation.
	 */
	public function __construct(
		public readonly string $inboundPlanId,
		public readonly string $operationId,
	) {
	}
}
