<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxRate extends BaseDto
{
	/**
	 * @param ?float $cessRate Rate of cess tax.
	 * @param ?float $gstRate Rate of gst tax.
	 * @param ?string $taxType Type of tax. Can be `CGST`, `SGST`, `IGST`, or `TOTAL_TAX`.
	 */
	public function __construct(
		public readonly ?float $cessRate = null,
		public readonly ?float $gstRate = null,
		public readonly ?string $taxType = null,
	) {
	}
}
