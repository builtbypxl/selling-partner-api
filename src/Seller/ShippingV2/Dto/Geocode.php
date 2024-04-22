<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Geocode extends BaseDto
{
	/**
	 * @param ?string $latitude The latitude of access point.
	 * @param ?string $longitude The longitude of access point.
	 */
	public function __construct(
		public readonly ?string $latitude = null,
		public readonly ?string $longitude = null,
	) {
	}
}
