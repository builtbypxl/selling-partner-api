<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TrackingDetails extends BaseDto
{
	/**
	 * @param ?LtlTrackingDetail $ltlTrackingDetail Contains information related to Less-Than-Truckload (LTL) shipment tracking.
	 * @param ?SpdTrackingDetail $spdTrackingDetail Contains information related to Small Parcel Delivery (SPD) shipment tracking.
	 */
	public function __construct(
		public readonly ?LtlTrackingDetail $ltlTrackingDetail = null,
		public readonly ?SpdTrackingDetail $spdTrackingDetail = null,
	) {
	}
}
