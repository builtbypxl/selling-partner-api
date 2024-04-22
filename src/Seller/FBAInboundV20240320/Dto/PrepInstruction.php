<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class PrepInstruction extends BaseDto
{
	/**
	 * @param ?Currency $fee Currency definition.
	 * @param ?string $prepOwner In some situations, special preparations are required for items and this field reflects the owner of the
	 *         preparations. Options include `AMAZON` or `SELLER`.
	 * @param ?string $prepType Type of preparation that should be done. Can be `ITEM_LABELING`, `ITEM_BUBBLEWRAP`, `ITEM_POLYBAGGING`, `ITEM_TAPING`, `ITEM_BLACK_SHRINKWRAP`, `ITEM_HANG_GARMENT`, `ITEM_BOXING`, `ITEM_SETCREAT`, `ITEM_RMOVHANG`, `ITEM_SUFFOSTK`, `ITEM_CAP_SEALING`, `ITEM_DEBUNDLE`, `ITEM_SETSTK`, `ITEM_SIOC`, `ITEM_NO_PREP`, `ADULT`, `BABY`, `TEXTILE`, `HANGER`, `FRAGILE`, `LIQUID`, `SHARP`, `SMALL`, `PERFORATED`, `GRANULAR`, `SET`, `FC_PROVIDED`, `UNKNOWN`, or `NONE`.
	 */
	public function __construct(
		public readonly ?Currency $fee = null,
		public readonly ?string $prepOwner = null,
		public readonly ?string $prepType = null,
	) {
	}
}
