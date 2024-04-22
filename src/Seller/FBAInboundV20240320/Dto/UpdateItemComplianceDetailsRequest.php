<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdateItemComplianceDetailsRequest extends BaseDto
{
	/**
	 * @param string $msku The merchant SKU, a merchant-supplied identifier for a specific SKU.
	 * @param TaxDetails $taxDetails Information used to determine the tax compliance.
	 */
	public function __construct(
		public readonly string $msku,
		public readonly TaxDetails $taxDetails,
	) {
	}
}
