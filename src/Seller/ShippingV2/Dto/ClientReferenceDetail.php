<?php

namespace SellingPartnerApi\Seller\ShippingV2\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ClientReferenceDetail extends BaseDto
{
	/**
	 * @param string $clientReferenceType Client Reference type.
	 * @param string $clientReferenceId The Client Reference Id.
	 */
	public function __construct(
		public readonly string $clientReferenceType,
		public readonly string $clientReferenceId,
	) {
	}
}
