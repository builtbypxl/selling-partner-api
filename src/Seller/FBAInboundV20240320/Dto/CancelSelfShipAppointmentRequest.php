<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CancelSelfShipAppointmentRequest extends BaseDto
{
	/**
	 * @param ?string $reasonComment Reason for cancelling or rescheduling a self-ship appointment.
	 */
	public function __construct(
		public readonly ?string $reasonComment = null,
	) {
	}
}
