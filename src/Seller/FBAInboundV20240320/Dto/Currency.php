<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class Currency extends Dto
{
    /**
     * @param  float  $amount  Decimal value of the currency.
     * @param  string  $code  ISO 4217 standard of a currency code.
     */
    public function __construct(
        public readonly float $amount,
        public readonly string $code,
    ) {
    }
}
