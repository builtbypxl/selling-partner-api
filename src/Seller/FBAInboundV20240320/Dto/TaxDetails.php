<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TaxDetails extends BaseDto
{
	protected static array $complexArrayTypes = ['taxRates' => [TaxRate::class]];


	/**
	 * @param ?Currency $declaredValue Currency definition.
	 * @param ?string $hsnCode Harmonized System of Nomenclature code.
	 * @param TaxRate[]|null $taxRates List of tax rates.
	 */
	public function __construct(
		public readonly ?Currency $declaredValue = null,
		public readonly ?string $hsnCode = null,
		public readonly ?array $taxRates = null,
	) {
	}
}
