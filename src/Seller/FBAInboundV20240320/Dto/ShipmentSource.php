<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentSource extends BaseDto
{
	/**
	 * @param string $sourceType The type of source for this shipment. Can be `SELLER_FACILITY`.
	 * @param ?Address $address Specific details to identify a place.
	 */
	public function __construct(
		public readonly string $sourceType,
		public readonly ?Address $address = null,
	) {
	}
}
