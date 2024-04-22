<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PackingOptionSummary extends BaseDto
{
	/**
	 * @param string $packingOptionId Identifier to a packing option.
	 * @param string $status The status of a packing option. Can be 'OFFERED', 'ACCEPTED', or 'EXPIRED'.
	 */
	public function __construct(
		public readonly string $packingOptionId,
		public readonly string $status,
	) {
	}
}
