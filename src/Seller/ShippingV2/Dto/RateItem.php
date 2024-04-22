<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class RateItem extends BaseDto
{
	protected static array $attributeMap = ['rateItemId' => 'rateItemID'];


	/**
	 * @param ?string $rateItemId Unique ID for the rateItem.
	 * @param ?string $rateItemType Type of the rateItem.
	 * @param ?Currency $rateItemCharge The monetary value in the currency indicated, in ISO 4217 standard format.
	 * @param ?string $rateItemNameLocalization Used for the localization.
	 */
	public function __construct(
		public readonly ?string $rateItemId = null,
		public readonly ?string $rateItemType = null,
		public readonly ?Currency $rateItemCharge = null,
		public readonly ?string $rateItemNameLocalization = null,
	) {
	}
}
