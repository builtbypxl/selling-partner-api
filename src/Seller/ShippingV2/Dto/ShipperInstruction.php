<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipperInstruction extends BaseDto
{
	/**
	 * @param ?string $deliveryNotes The delivery notes for the shipment
	 */
	public function __construct(
		public readonly ?string $deliveryNotes = null,
	) {
	}
}
