<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ComplianceDetail extends BaseDto
{
	/**
	 * @param ?string $asin The Amazon Standard Identification Number, which identifies the detail page identifier.
	 * @param ?string $fnsku The Fulfillment Network SKU, which identifies a real fulfillable item with catalog data and condition.
	 * @param ?string $msku The merchant SKU, a merchant-supplied identifier for a specific SKU.
	 * @param ?TaxDetails $taxDetails Information used to determine the tax compliance.
	 */
	public function __construct(
		public readonly ?string $asin = null,
		public readonly ?string $fnsku = null,
		public readonly ?string $msku = null,
		public readonly ?TaxDetails $taxDetails = null,
	) {
	}
}
