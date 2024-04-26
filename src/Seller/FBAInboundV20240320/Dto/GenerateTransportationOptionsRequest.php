<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use SellingPartnerApi\Dto;

final class GenerateTransportationOptionsRequest extends Dto
{
    protected static array $complexArrayTypes = [
        'shipmentTransportationConfigurations' => [ShipmentTransportationConfiguration::class],
    ];

    /**
     * @param  string  $placementOptionId  The placement option to generate transportation options for.
     * @param  ShipmentTransportationConfiguration[]  $shipmentTransportationConfigurations  List of shipment transportation configurations.
     */
    public function __construct(
        public readonly string $placementOptionId,
        public readonly array $shipmentTransportationConfigurations,
    ) {
    }
}
