<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GetAccessPointsResult extends BaseDto
{
	/**
	 * @param array[] $accessPointsMap Map of type of access point to list of access points
	 */
	public function __construct(
		public readonly array $accessPointsMap,
	) {
	}
}
