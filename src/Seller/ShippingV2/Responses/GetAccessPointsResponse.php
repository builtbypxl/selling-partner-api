<?php

namespace SellingPartnerApi\Seller\ShippingV2\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ShippingV2\Dto\GetAccessPointsResult;

final class GetAccessPointsResponse extends BaseResponse
{
	/**
	 * @param ?GetAccessPointsResult $payload The payload for the GetAccessPoints API.
	 */
	public function __construct(
		public readonly ?GetAccessPointsResult $payload = null,
	) {
	}
}
