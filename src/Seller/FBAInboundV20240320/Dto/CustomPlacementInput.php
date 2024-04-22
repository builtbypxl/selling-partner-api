<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class CustomPlacementInput extends BaseDto
{
	protected static array $complexArrayTypes = ['items' => [Item::class]];


	/**
	 * @param Item[] $items Items contained within the box.
	 * @param string $warehouseId Warehouse Id.
	 */
	public function __construct(
		public readonly array $items,
		public readonly string $warehouseId,
	) {
	}
}
