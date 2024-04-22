<?php

namespace SellingPartnerApi\Seller\MerchantFulfillmentV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LiquidVolume extends BaseDto
{
	protected static array $attributeMap = ['unit' => 'Unit', 'value' => 'Value'];


	/**
	 * @param string $unit The unit of measurement.
	 * @param float $value The measurement value.
	 */
	public function __construct(
		public readonly string $unit,
		public readonly float $value,
	) {
	}
}
