<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PalletInformation extends BaseDto
{
	protected static array $complexArrayTypes = ['pallets' => [Pallet::class]];


	/**
	 * @param Pallet[] $pallets The pallets in an inbound plan.
	 * @param ?Currency $declaredValue Currency definition.
	 * @param ?string $freightClass Freight class. Can be `NONE`, `FC_50`, `FC_55`, `FC_60`, `FC_65`, `FC_70`, `FC_77_5`, `FC_85`, `FC_92_5`, `FC_100`, `FC_110`, `FC_125`, `FC_150`, `FC_175`, `FC_200`, `FC_250`, `FC_300`, `FC_400`, or `FC_500`.
	 */
	public function __construct(
		public readonly array $pallets,
		public readonly ?Currency $declaredValue = null,
		public readonly ?string $freightClass = null,
	) {
	}
}
