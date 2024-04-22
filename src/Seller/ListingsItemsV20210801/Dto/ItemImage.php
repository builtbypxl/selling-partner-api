<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ItemImage extends BaseDto
{
	/**
	 * @param string $link The link, or URL, to the image.
	 * @param int $height The height of the image in pixels.
	 * @param int $width The width of the image in pixels.
	 */
	public function __construct(
		public readonly string $link,
		public readonly int $height,
		public readonly int $width,
	) {
	}
}
