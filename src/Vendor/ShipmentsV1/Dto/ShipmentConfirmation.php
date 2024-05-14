<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class ShipmentConfirmation extends BaseDto
{
    protected static array $complexArrayTypes = [
        'shippedItems' => [Item::class],
        'cartons' => [Carton::class],
        'pallets' => [Pallet::class],
    ];

    /**
     * @param  string  $shipmentIdentifier  Unique shipment ID (not used over the last 365 days).
     * @param  string  $shipmentConfirmationType  Indicates if this shipment confirmation is the initial confirmation, or intended to replace an already posted shipment confirmation. If replacing an existing shipment confirmation, be sure to provide the identical shipmentIdentifier and sellingParty information as in the previous confirmation.
     * @param  DateTime  $shipmentConfirmationDate  Date on which the shipment confirmation was submitted.
     * @param  Item[]  $shippedItems  A list of the items in this shipment and their associated details. If any of the item detail fields are common at a carton or a pallet level, provide them at the corresponding carton or pallet level.
     * @param  ?string  $shipmentType  The type of shipment.
     * @param  ?string  $shipmentStructure  Shipment hierarchical structure.
     * @param  ?TransportationDetails  $transportationDetails
     * @param  ?string  $amazonReferenceNumber  The Amazon Reference Number is a unique identifier generated by Amazon for all Collect/WePay shipments when you submit  a routing request. This field is mandatory for Collect/WePay shipments.
     * @param  ?DateTime  $shippedDate  The date and time of the departure of the shipment from the vendor's location. Vendors are requested to send ASNs within 30 minutes of departure from their warehouse/distribution center or at least 6 hours prior to the appointment time at the buyer destination warehouse, whichever is sooner. Shipped date mentioned in the shipment confirmation should not be in the future.
     * @param  ?DateTime  $estimatedDeliveryDate  The date and time on which the shipment is estimated to reach buyer's warehouse. It needs to be an estimate based on the average transit time between ship from location and the destination. The exact appointment time will be provided by the buyer and is potentially not known when creating the shipment confirmation.
     * @param  ?ShipmentMeasurements  $shipmentMeasurements  Shipment measurement details.
     * @param  ?ImportDetails  $importDetails
     * @param  Carton[]|null  $cartons  A list of the cartons in this shipment.
     * @param  Pallet[]|null  $pallets  A list of the pallets in this shipment.
     */
    public function __construct(
        public readonly string $shipmentIdentifier,
        public readonly string $shipmentConfirmationType,
        public readonly \DateTime $shipmentConfirmationDate,
        public readonly PartyIdentification $sellingParty,
        public readonly PartyIdentification $shipFromParty,
        public readonly PartyIdentification $shipToParty,
        public readonly array $shippedItems,
        public readonly ?string $shipmentType = null,
        public readonly ?string $shipmentStructure = null,
        public readonly ?TransportationDetails $transportationDetails = null,
        public readonly ?string $amazonReferenceNumber = null,
        public readonly ?\DateTime $shippedDate = null,
        public readonly ?\DateTime $estimatedDeliveryDate = null,
        public readonly ?ShipmentMeasurements $shipmentMeasurements = null,
        public readonly ?ImportDetails $importDetails = null,
        public readonly ?array $cartons = null,
        public readonly ?array $pallets = null,
    ) {
    }
}
