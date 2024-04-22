<?php

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV2\Dto\OneClickShipmentResult;

final class OneClickShipmentResponse extends BaseResponse
{
	/**
	 * @param ?OneClickShipmentResult $payload The payload for the OneClickShipment API.
	 */
	public function __construct(
		public readonly ?OneClickShipmentResult $payload = null,
	) {
	}
}
