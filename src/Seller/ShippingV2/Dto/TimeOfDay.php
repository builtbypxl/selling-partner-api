<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TimeOfDay extends BaseDto
{
	/**
	 * @param ?int $hourOfDay
	 * @param ?int $minuteOfHour
	 * @param ?int $secondOfMinute
	 */
	public function __construct(
		public readonly ?int $hourOfDay = null,
		public readonly ?int $minuteOfHour = null,
		public readonly ?int $secondOfMinute = null,
	) {
	}
}
