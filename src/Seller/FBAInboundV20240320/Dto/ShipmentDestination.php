<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentDestination extends BaseDto
{
	/**
	 * @param string $destinationType The type of destination for this shipment. Can be `AMAZON_OPTIMIZED`, or `AMAZON_WAREHOUSE`.
	 * @param ?Address $address Specific details to identify a place.
	 * @param ?string $warehouseId The warehouse that the shipment should be sent to.  Empty if the destination type is `AMAZON_OPTIMIZED`.
	 */
	public function __construct(
		public readonly string $destinationType,
		public readonly ?Address $address = null,
		public readonly ?string $warehouseId = null,
	) {
	}
}
