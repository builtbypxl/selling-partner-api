<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Box extends BaseDto
{
	protected static array $complexArrayTypes = ['items' => [Item::class]];


	/**
	 * @param string $packageId Primary key to uniquely identify a Package (Box or Pallet).
	 * @param ?string $boxId The ID provided by Amazon that identifies a given box. This ID is comprised of the external shipment ID (which
	 *         is generated after transportation has been confirmed) and the index of the box.
	 * @param ?Region $destinationRegion Representation of a location used within the inbounding experience.
	 * @param ?Dimensions $dimensions Measurement of a package dimensions.
	 * @param Item[]|null $items Items contained within the box.
	 * @param ?int $quantity The number of containers where all other properties like weight or dimensions are identical.
	 * @param ?string $templateName Template name of the box.
	 * @param ?Weight $weight The weight of a package.
	 */
	public function __construct(
		public readonly string $packageId,
		public readonly ?string $boxId = null,
		public readonly ?Region $destinationRegion = null,
		public readonly ?Dimensions $dimensions = null,
		public readonly ?array $items = null,
		public readonly ?int $quantity = null,
		public readonly ?string $templateName = null,
		public readonly ?Weight $weight = null,
	) {
	}
}
