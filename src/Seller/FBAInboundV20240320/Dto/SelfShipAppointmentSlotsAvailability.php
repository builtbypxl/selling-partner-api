<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SelfShipAppointmentSlotsAvailability extends BaseDto
{
	protected static array $complexArrayTypes = ['slots' => [AppointmentSlot::class]];


	/**
	 * @param ?DateTime $expiresAt ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
	 * @param AppointmentSlot[]|null $slots List of appointment slots.
	 */
	public function __construct(
		public readonly ?\DateTime $expiresAt = null,
		public readonly ?array $slots = null,
	) {
	}
}
