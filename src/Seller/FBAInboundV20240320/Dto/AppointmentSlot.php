<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AppointmentSlot extends BaseDto
{
	/**
	 * @param string $slotId An identifier to a self-ship appointment slot.
	 * @param AppointmentSlotTime $slotTime An appointment slot time with a start and end.
	 */
	public function __construct(
		public readonly string $slotId,
		public readonly AppointmentSlotTime $slotTime,
	) {
	}
}
