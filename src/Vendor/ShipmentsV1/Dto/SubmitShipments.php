<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitShipments extends BaseDto
{
	protected static array $complexArrayTypes = ['shipments' => [Shipment::class]];


	/**
	 * @param Shipment[]|null $shipments A list of one or more shipments with underlying details.
	 */
	public function __construct(
		public readonly ?array $shipments = null,
	) {
	}
}
