<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ConfirmTransportationOptionsRequest extends BaseDto
{
	protected static array $complexArrayTypes = ['transportationSelections' => [TransportationSelection::class]];


	/**
	 * @param TransportationSelection[] $transportationSelections Information needed to confirm one of the available transportation options.
	 */
	public function __construct(
		public readonly array $transportationSelections,
	) {
	}
}
