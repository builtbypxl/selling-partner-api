<?php

namespace SellingPartnerApi\Seller\ProductPricingV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class QuantityDiscountPriceType extends BaseDto
{
	/**
	 * @param int $quantityTier Indicates at what quantity this price becomes active.
	 * @param string $quantityDiscountType
	 * @param MoneyType $listingPrice
	 */
	public function __construct(
		public readonly int $quantityTier,
		public readonly string $quantityDiscountType,
		public readonly MoneyType $listingPrice,
	) {
	}
}
