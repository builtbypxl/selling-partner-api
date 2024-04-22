<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class GeneratePlacementOptionsRequest extends BaseDto
{
	protected static array $complexArrayTypes = ['customPlacement' => [CustomPlacementInput::class]];


	/**
	 * @param CustomPlacementInput[]|null $customPlacement Custom placements options to be added to the plan.
	 */
	public function __construct(
		public readonly ?array $customPlacement = null,
	) {
	}
}
