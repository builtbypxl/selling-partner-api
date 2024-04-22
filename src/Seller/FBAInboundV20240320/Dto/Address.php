<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Address extends BaseDto
{
	/**
	 * @param string $addressLine1 Street address information.
	 * @param string $city The city.
	 * @param string $countryCode The country code in two-character ISO 3166-1 alpha-2 format.
	 * @param string $name The name of the individual or business.
	 * @param string $postalCode The postal code.
	 * @param ?string $addressLine2 Additional street address information.
	 * @param ?string $companyName The name of the business.
	 * @param ?string $stateOrProvinceCode The state or province code.
	 */
	public function __construct(
		public readonly string $addressLine1,
		public readonly string $city,
		public readonly string $countryCode,
		public readonly string $name,
		public readonly string $postalCode,
		public readonly ?string $addressLine2 = null,
		public readonly ?string $companyName = null,
		public readonly ?string $stateOrProvinceCode = null,
	) {
	}
}
