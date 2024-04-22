<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Benefits extends BaseDto
{
	protected static array $complexArrayTypes = ['excludedBenefits' => [ExcludedBenefit::class]];


	/**
	 * @param string[] $includedBenefits A list of included benefits.
	 * @param ExcludedBenefit[] $excludedBenefits A list of excluded benefit. Refer to the ExcludeBenefit object for further documentation
	 */
	public function __construct(
		public readonly array $includedBenefits,
		public readonly array $excludedBenefits,
	) {
	}
}
