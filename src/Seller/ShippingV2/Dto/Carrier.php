<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Carrier extends BaseDto
{
	/**
	 * @param string $id The carrier identifier for the offering, provided by the carrier.
	 * @param string $name The carrier name for the offering.
	 */
	public function __construct(
		public readonly string $id,
		public readonly string $name,
	) {
	}
}
