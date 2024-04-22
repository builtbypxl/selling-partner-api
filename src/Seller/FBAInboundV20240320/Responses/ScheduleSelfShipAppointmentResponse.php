<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\SelfShipAppointmentDetails;

final class ScheduleSelfShipAppointmentResponse extends BaseResponse
{
	/**
	 * @param SelfShipAppointmentDetails $selfShipAppointmentDetails Appointment details for carrier pickup or fulfillment center appointments.
	 */
	public function __construct(
		public readonly SelfShipAppointmentDetails $selfShipAppointmentDetails,
	) {
	}
}
