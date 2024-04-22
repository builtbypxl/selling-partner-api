<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Service extends BaseDto
{
	/**
	 * @param string $id An identifier for the shipping service.
	 * @param string $name The name of the shipping service.
	 */
	public function __construct(
		public readonly string $id,
		public readonly string $name,
	) {
	}
}
