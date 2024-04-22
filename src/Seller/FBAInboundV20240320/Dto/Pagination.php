<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Pagination extends BaseDto
{
	/**
	 * @param ?string $nextToken When present, pass this string token in the next request to return the next response page.
	 */
	public function __construct(
		public readonly ?string $nextToken = null,
	) {
	}
}
