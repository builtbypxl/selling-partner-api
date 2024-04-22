<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class TrackingDetailsInput extends BaseDto
{
	/**
	 * @param ?LtlTrackingDetailInput $ltlTrackingDetail Contains input information to update Less-Than-Truckload (LTL) tracking information.
	 * @param ?SpdTrackingDetailInput $spdTrackingDetail Contains input information to update Small Parcel Delivery (SPD) tracking information.
	 */
	public function __construct(
		public readonly ?LtlTrackingDetailInput $ltlTrackingDetail = null,
		public readonly ?SpdTrackingDetailInput $spdTrackingDetail = null,
	) {
	}
}
