<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitNdrFeedbackRequest extends BaseDto
{
	/**
	 * @param string $trackingId The carrier generated identifier for a package in a purchased shipment.
	 * @param string $ndrAction The type of NDR action shipper wants to take for a particular shipment.
	 * @param ?NdrRequestData $ndrRequestData Additional information required for the NDR action that has been filed. If the NDR Action is RESCHEDULE, rescheduleDate is a required field. Otherwise, if the NDR Action is REATTEMPT, additionalAddressNotes is a required field.
	 */
	public function __construct(
		public readonly string $trackingId,
		public readonly string $ndrAction,
		public readonly ?NdrRequestData $ndrRequestData = null,
	) {
	}
}
