<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemIdentifiersByMarketplace extends BaseDto
{
	/**
	 * @param ?string $marketplaceId A marketplace identifier. Identifies the Amazon marketplace for the listings item.
	 * @param ?string $asin Amazon Standard Identification Number (ASIN) of the listings item.
	 */
	public function __construct(
		public readonly ?string $marketplaceId = null,
		public readonly ?string $asin = null,
	) {
	}
}
