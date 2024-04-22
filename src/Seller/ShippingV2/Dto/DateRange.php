<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DateRange extends BaseDto
{
	/**
	 * @param ?string $startDate Start Date for query .
	 * @param ?string $endDate end date for query.
	 */
	public function __construct(
		public readonly ?string $startDate = null,
		public readonly ?string $endDate = null,
	) {
	}
}
