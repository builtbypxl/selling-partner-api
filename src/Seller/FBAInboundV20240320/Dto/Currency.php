<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Currency extends BaseDto
{
	/**
	 * @param float $amount Decimal value of the currency.
	 * @param string $code ISO 4217 standard of a currency code.
	 */
	public function __construct(
		public readonly float $amount,
		public readonly string $code,
	) {
	}
}
