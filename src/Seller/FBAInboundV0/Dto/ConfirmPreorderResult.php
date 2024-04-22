<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ConfirmPreorderResult extends BaseDto
{
	protected static array $attributeMap = [
		'confirmedNeedByDate' => 'ConfirmedNeedByDate',
		'confirmedFulfillableDate' => 'ConfirmedFulfillableDate',
	];


	/**
	 * @param ?DateTime $confirmedNeedByDate Type containing date in string format
	 * @param ?DateTime $confirmedFulfillableDate Type containing date in string format
	 */
	public function __construct(
		public readonly ?\DateTime $confirmedNeedByDate = null,
		public readonly ?\DateTime $confirmedFulfillableDate = null,
	) {
	}
}
