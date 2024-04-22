<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Points extends BaseDto
{
	/**
	 * @param int $pointsNumber
	 */
	public function __construct(
		public readonly int $pointsNumber,
	) {
	}
}
