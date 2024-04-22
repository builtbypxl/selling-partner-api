<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ServiceSelection extends BaseDto
{
	/**
	 * @param string[] $serviceId A list of ServiceId.
	 */
	public function __construct(
		public readonly array $serviceId,
	) {
	}
}
