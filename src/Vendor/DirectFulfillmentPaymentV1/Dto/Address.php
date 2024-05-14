<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentPaymentV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Address extends BaseDto
{
    /**
     * @param  string  $name  The name of the person, business or institution at that address.
     * @param  string  $addressLine1  First line of the address.
     * @param  string  $city  The city where the person, business or institution is located.
     * @param  string  $stateOrRegion  The state or region where person, business or institution is located.
     * @param  string  $postalCode  The postal code of that address. It conatins a series of letters or digits or both, sometimes including spaces or punctuation.
     * @param  string  $countryCode  The two digit country code in ISO 3166-1 alpha-2 format.
     * @param  ?string  $addressLine2  Additional street address information, if required.
     * @param  ?string  $addressLine3  Additional street address information, if required.
     * @param  ?string  $county  The county where person, business or institution is located.
     * @param  ?string  $district  The district where person, business or institution is located.
     * @param  ?string  $phone  The phone number of the person, business or institution located at that address.
     */
    public function __construct(
        public readonly string $name,
        public readonly string $addressLine1,
        public readonly string $city,
        public readonly string $stateOrRegion,
        public readonly string $postalCode,
        public readonly string $countryCode,
        public readonly ?string $addressLine2 = null,
        public readonly ?string $addressLine3 = null,
        public readonly ?string $county = null,
        public readonly ?string $district = null,
        public readonly ?string $phone = null,
    ) {
    }
}
