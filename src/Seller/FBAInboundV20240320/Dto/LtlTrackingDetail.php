<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class LtlTrackingDetail extends BaseDto
{
	/**
	 * @param ?string $billOfLadingNumber The number of the carrier shipment acknowledgement document.
	 * @param ?string[] $freightBillNumber The number associated with the freight bill.
	 */
	public function __construct(
		public readonly ?string $billOfLadingNumber = null,
		public readonly ?array $freightBillNumber = null,
	) {
	}
}
