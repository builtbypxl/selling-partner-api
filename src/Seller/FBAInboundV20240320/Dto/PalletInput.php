<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PalletInput extends BaseDto
{
	/**
	 * @param int $quantity The number of containers where all other properties like weight or dimensions are identical.
	 * @param ?Dimensions $dimensions Measurement of a package dimensions.
	 * @param ?string $stackability Indicates whether pallets will be stacked when carrier arrives for pick-up.
	 * @param ?Weight $weight The weight of a package.
	 */
	public function __construct(
		public readonly int $quantity,
		public readonly ?Dimensions $dimensions = null,
		public readonly ?string $stackability = null,
		public readonly ?Weight $weight = null,
	) {
	}
}
