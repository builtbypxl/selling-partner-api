<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitShipmentConfirmationsRequest extends BaseDto
{
	protected static array $complexArrayTypes = ['shipmentConfirmations' => [ShipmentConfirmation::class]];


	/**
	 * @param ShipmentConfirmation[]|null $shipmentConfirmations
	 */
	public function __construct(
		public readonly ?array $shipmentConfirmations = null,
	) {
	}
}
