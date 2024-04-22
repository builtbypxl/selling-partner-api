<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AccessibilityAttributes extends BaseDto
{
	/**
	 * @param ?string $distance The approximate distance of access point from input postalCode's centroid.
	 * @param ?int $driveTime The approximate (static) drive time from input postal code's centroid.
	 */
	public function __construct(
		public readonly ?string $distance = null,
		public readonly ?int $driveTime = null,
	) {
	}
}
