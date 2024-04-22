<?php

namespace SellingPartnerApi\Seller\SolicitationsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SolicitationsAction extends BaseDto
{
	/**
	 * @param string $name
	 */
	public function __construct(
		public readonly string $name,
	) {
	}
}
