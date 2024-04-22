<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdateShipmentDeliveryWindowRequest extends BaseDto
{
	/**
	 * @param WindowInput $deliveryWindow Contains only a starting DateTime.
	 */
	public function __construct(
		public readonly WindowInput $deliveryWindow,
	) {
	}
}
