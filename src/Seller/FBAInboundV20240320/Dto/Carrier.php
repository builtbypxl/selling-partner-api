<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Carrier extends BaseDto
{
	/**
	 * @param ?string $alphaCode The carrier code. For example, USPS or DHLEX.
	 * @param ?string $name The name of the carrier.
	 */
	public function __construct(
		public readonly ?string $alphaCode = null,
		public readonly ?string $name = null,
	) {
	}
}
