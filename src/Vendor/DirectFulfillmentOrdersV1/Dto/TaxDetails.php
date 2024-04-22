<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;
use SellingPartnerApi\Vendor\DirectFulfillmentOrdersV1\Dto\TaxDetails as TaxDetails1;

final class TaxDetails extends BaseDto
{
	protected static array $complexArrayTypes = ['taxLineItem' => [TaxDetails::class]];


	/**
	 * @param TaxDetails[]|null $taxLineItem A list of tax line items.
	 */
	public function __construct(
		public readonly ?array $taxLineItem = null,
	) {
	}
}
