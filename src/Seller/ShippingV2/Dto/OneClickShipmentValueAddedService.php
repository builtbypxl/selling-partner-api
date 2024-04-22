<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OneClickShipmentValueAddedService extends BaseDto
{
	/**
	 * @param string $id The identifier of the selected value-added service.
	 * @param ?Currency $amount The monetary value in the currency indicated, in ISO 4217 standard format.
	 */
	public function __construct(
		public readonly string $id,
		public readonly ?Currency $amount = null,
	) {
	}
}