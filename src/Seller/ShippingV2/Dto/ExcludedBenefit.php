<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ExcludedBenefit extends BaseDto
{
	/**
	 * @param string $benefit
	 * @param string $reasonCode
	 */
	public function __construct(
		public readonly string $benefit,
		public readonly string $reasonCode,
	) {
	}
}
