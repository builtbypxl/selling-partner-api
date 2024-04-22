<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class UpdateShipmentTrackingDetailsRequest extends BaseDto
{
	/**
	 * @param TrackingDetailsInput $trackingDetails Tracking information input for Less-Than-Truckload (LTL) and Small Parcel Delivery (SPD) shipments.
	 */
	public function __construct(
		public readonly TrackingDetailsInput $trackingDetails,
	) {
	}
}
