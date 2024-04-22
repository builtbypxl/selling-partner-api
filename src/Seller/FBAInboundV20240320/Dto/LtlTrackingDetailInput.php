<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LtlTrackingDetailInput extends BaseDto
{
	/**
	 * @param string[] $freightBillNumber The number associated with the freight bill.
	 * @param ?string $billOfLadingNumber The number of the carrier shipment acknowledgement document.
	 */
	public function __construct(
		public readonly array $freightBillNumber,
		public readonly ?string $billOfLadingNumber = null,
	) {
	}
}
