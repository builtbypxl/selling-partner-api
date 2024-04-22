<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pagination;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\SelfShipAppointmentSlotsAvailability;

final class GetSelfShipAppointmentSlotsResponse extends BaseResponse
{
	/**
	 * @param SelfShipAppointmentSlotsAvailability $selfShipAppointmentSlotsAvailability The self ship appointment time slots availability and an expiration date for which the slots can be scheduled.
	 * @param ?Pagination $pagination Contains tokens to fetch from a certain page.
	 */
	public function __construct(
		public readonly SelfShipAppointmentSlotsAvailability $selfShipAppointmentSlotsAvailability,
		public readonly ?Pagination $pagination = null,
	) {
	}
}
