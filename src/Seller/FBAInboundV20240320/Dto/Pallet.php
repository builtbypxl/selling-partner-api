<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Pallet extends BaseDto
{
	/**
	 * @param string $packageId Primary key to uniquely identify a Package (Box or Pallet).
	 * @param ?Dimensions $dimensions Measurement of a package dimensions.
	 * @param ?int $quantity The number of containers where all other properties like weight or dimensions are identical.
	 * @param ?string $stackability Indicates whether pallets will be stacked when carrier arrives for pick-up.
	 * @param ?Weight $weight The weight of a package.
	 */
	public function __construct(
		public readonly string $packageId,
		public readonly ?Dimensions $dimensions = null,
		public readonly ?int $quantity = null,
		public readonly ?string $stackability = null,
		public readonly ?Weight $weight = null,
	) {
	}
}
