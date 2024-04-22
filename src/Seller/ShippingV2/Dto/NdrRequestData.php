<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class NdrRequestData extends BaseDto
{
	/**
	 * @param ?DateTime $rescheduleDate The date on which the Seller wants to reschedule shipment delivery, in ISO-8601 date/time format
	 * @param ?string $additionalAddressNotes Address notes to re-attempt delivery with.
	 */
	public function __construct(
		public readonly ?\DateTime $rescheduleDate = null,
		public readonly ?string $additionalAddressNotes = null,
	) {
	}
}
