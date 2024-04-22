<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Dates extends BaseDto
{
	/**
	 * @param ?Window $deliveryWindow Contains a start and end DateTime representing a time range.
	 * @param ?Window $readyToShipWindow Contains a start and end DateTime representing a time range.
	 */
	public function __construct(
		public readonly ?Window $deliveryWindow = null,
		public readonly ?Window $readyToShipWindow = null,
	) {
	}
}
