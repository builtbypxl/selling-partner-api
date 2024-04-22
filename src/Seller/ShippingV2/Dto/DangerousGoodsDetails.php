<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DangerousGoodsDetails extends BaseDto
{
	/**
	 * @param ?string $unitedNationsRegulatoryId The specific UNID of the item being shipped.
	 * @param ?string $transportationRegulatoryClass The specific regulatory class  of the item being shipped.
	 * @param ?string $packingGroup The specific packaging group of the item being shipped.
	 * @param ?string $packingInstruction The specific packing instruction of the item being shipped.
	 */
	public function __construct(
		public readonly ?string $unitedNationsRegulatoryId = null,
		public readonly ?string $transportationRegulatoryClass = null,
		public readonly ?string $packingGroup = null,
		public readonly ?string $packingInstruction = null,
	) {
	}
}
