<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class AccessPointDetails extends BaseDto
{
	/**
	 * @param ?string $accessPointId Unique identifier for the access point
	 */
	public function __construct(
		public readonly ?string $accessPointId = null,
	) {
	}
}
