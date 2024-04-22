<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TrackingSummary extends BaseDto
{
	/**
	 * @param ?string $status The status of the package being shipped.
	 * @param ?TrackingDetailCodes $trackingDetailCodes Contains detail codes that provide additional details related to the forward and return leg of the shipment.
	 */
	public function __construct(
		public readonly ?string $status = null,
		public readonly ?TrackingDetailCodes $trackingDetailCodes = null,
	) {
	}
}
