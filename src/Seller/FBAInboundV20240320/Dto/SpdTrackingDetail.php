<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SpdTrackingDetail extends BaseDto
{
	protected static array $complexArrayTypes = ['spdTrackingItems' => [SpdTrackingItem::class]];


	/**
	 * @param SpdTrackingItem[]|null $spdTrackingItems List of Small Parcel Delivery (SPD) tracking items.
	 */
	public function __construct(
		public readonly ?array $spdTrackingItems = null,
	) {
	}
}
