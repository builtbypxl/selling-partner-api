<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SetPackingInformationRequest extends BaseDto
{
	protected static array $complexArrayTypes = ['packageGroupings' => [PackageGroupingInput::class]];


	/**
	 * @param PackageGroupingInput[]|null $packageGroupings List of packing information for the inbound plan.
	 */
	public function __construct(
		public readonly ?array $packageGroupings = null,
	) {
	}
}
