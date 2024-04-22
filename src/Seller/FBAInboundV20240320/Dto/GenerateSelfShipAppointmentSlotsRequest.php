<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GenerateSelfShipAppointmentSlotsRequest extends BaseDto
{
	/**
	 * @param ?DateTime $desiredEndDate The ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
	 * @param ?DateTime $desiredStartDate The ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
	 */
	public function __construct(
		public readonly ?\DateTime $desiredEndDate = null,
		public readonly ?\DateTime $desiredStartDate = null,
	) {
	}
}
