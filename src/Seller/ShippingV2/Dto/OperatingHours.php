<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OperatingHours extends BaseDto
{
	protected static array $complexArrayTypes = ['midDayClosures' => [TimeOfDay::class]];


	/**
	 * @param ?TimeOfDay $closingTime Denotes time of the day, used for defining opening or closing time of access points
	 * @param ?TimeOfDay $openingTime Denotes time of the day, used for defining opening or closing time of access points
	 * @param TimeOfDay[]|null $midDayClosures
	 */
	public function __construct(
		public readonly ?TimeOfDay $closingTime = null,
		public readonly ?TimeOfDay $openingTime = null,
		public readonly ?array $midDayClosures = null,
	) {
	}
}
