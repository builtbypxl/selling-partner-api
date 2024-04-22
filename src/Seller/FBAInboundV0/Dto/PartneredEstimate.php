<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PartneredEstimate extends BaseDto
{
	protected static array $attributeMap = [
		'amount' => 'Amount',
		'confirmDeadline' => 'ConfirmDeadline',
		'voidDeadline' => 'VoidDeadline',
	];


	/**
	 * @param Amount $amount The monetary value.
	 * @param ?DateTime $confirmDeadline Timestamp in ISO 8601 format.
	 * @param ?DateTime $voidDeadline Timestamp in ISO 8601 format.
	 */
	public function __construct(
		public readonly Amount $amount,
		public readonly ?\DateTime $confirmDeadline = null,
		public readonly ?\DateTime $voidDeadline = null,
	) {
	}
}
