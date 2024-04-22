<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SelfShipAppointmentDetails extends BaseDto
{
	/**
	 * @param ?float $appointmentId Identifier for appointment.
	 * @param ?AppointmentSlotTime $appointmentSlotTime An appointment slot time with a start and end.
	 * @param ?string $appointmentStatus Status of the appointment.
	 */
	public function __construct(
		public readonly ?float $appointmentId = null,
		public readonly ?AppointmentSlotTime $appointmentSlotTime = null,
		public readonly ?string $appointmentStatus = null,
	) {
	}
}
