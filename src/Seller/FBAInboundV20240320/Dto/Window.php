<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Window extends BaseDto
{
	/**
	 * @param DateTime $end The end timestamp of the window.
	 * @param DateTime $start The start timestamp of the window.
	 * @param ?DateTime $editableUntil The timestamp at which this Window can no longer be edited.
	 */
	public function __construct(
		public readonly \DateTime $end,
		public readonly \DateTime $start,
		public readonly ?\DateTime $editableUntil = null,
	) {
	}
}
