<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Region extends BaseDto
{
	/**
	 * @param ?string $countryCode ISO 3166 standard alpha-2 country code.
	 * @param ?string $state State.
	 * @param ?string $warehouseId An identifier for a warehouse, such as a FC, IXD, upstream storage.
	 */
	public function __construct(
		public readonly ?string $countryCode = null,
		public readonly ?string $state = null,
		public readonly ?string $warehouseId = null,
	) {
	}
}
