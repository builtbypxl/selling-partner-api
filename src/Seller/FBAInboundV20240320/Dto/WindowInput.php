<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class WindowInput extends BaseDto
{
	/**
	 * @param DateTime $start The start date of the window. The time component must be zero.
	 */
	public function __construct(
		public readonly \DateTime $start,
	) {
	}
}
