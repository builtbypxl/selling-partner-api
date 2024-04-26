<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class TaxDetails extends Dto
{
    protected static array $complexArrayTypes = ['taxRates' => [TaxRate::class]];

    /**
     * @param  ?Currency  $declaredValue  Currency definition.
     * @param  ?string  $hsnCode  Harmonized System of Nomenclature code.
     * @param  TaxRate[]|null  $taxRates  List of tax rates.
     */
    public function __construct(
        public readonly ?Currency $declaredValue = null,
        public readonly ?string $hsnCode = null,
        public readonly ?array $taxRates = null,
    ) {
    }
}
