<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Weight extends BaseDto
{
	/**
	 * @param string $unit Unit of the weight being measured.
	 * @param float $value Value of a weight.
	 */
	public function __construct(
		public readonly string $unit,
		public readonly float $value,
	) {
	}
}
