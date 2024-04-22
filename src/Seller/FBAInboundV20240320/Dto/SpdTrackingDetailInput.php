<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SpdTrackingDetailInput extends BaseDto
{
	protected static array $complexArrayTypes = ['spdTrackingItems' => [SpdTrackingItem::class]];


	/**
	 * @param SpdTrackingItem[] $spdTrackingItems List of Small Parcel Delivery (SPD) tracking items.
	 */
	public function __construct(
		public readonly array $spdTrackingItems,
	) {
	}
}
