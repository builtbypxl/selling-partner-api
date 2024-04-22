<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class UpdateShipmentDeliveryWindowResponse extends BaseResponse
{
	/**
	 * @param string $operationId UUID for the given operation.
	 */
	public function __construct(
		public readonly string $operationId,
	) {
	}
}