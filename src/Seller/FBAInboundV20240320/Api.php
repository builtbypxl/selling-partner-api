<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320;

use Saloon\Http\Response;
use SellingPartnerApi\BaseResource;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\CancelSelfShipAppointmentRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\ConfirmTransportationOptionsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\CreateInboundPlanRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\GeneratePlacementOptionsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\GenerateSelfShipAppointmentSlotsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\GenerateTransportationOptionsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\ScheduleSelfShipAppointmentRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\SetPackingInformationRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\UpdateItemComplianceDetailsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\UpdateShipmentDeliveryWindowRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\UpdateShipmentTrackingDetailsRequest;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\CancelInboundPlan;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\CancelSelfShipAppointment;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ConfirmPackingOption;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ConfirmPlacementOption;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ConfirmTransportationOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\CreateInboundPlan;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GeneratePackingOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GeneratePlacementOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GenerateSelfShipAppointmentSlots;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GenerateTransportationOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GetDeliveryChallanDocument;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GetInboundOperationStatus;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GetInboundPlan;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GetSelfShipAppointmentSlots;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\GetShipment;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListInboundPlanBoxes;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListInboundPlanItems;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListInboundPlanPallets;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListInboundPlans;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListItemComplianceDetails;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListPackingGroupItems;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListPackingOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListPlacementOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ListTransportationOptions;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\ScheduleSelfShipAppointment;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\SetPackingInformation;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\UpdateItemComplianceDetails;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\UpdateShipmentDeliveryWindow;
use SellingPartnerApi\Seller\FBAInboundV20240320\Requests\UpdateShipmentTrackingDetails;

class Api extends BaseResource
{
	/**
	 * @param ?int $pageSize The number of inbound plans to return in the response matching the given query.
	 * @param ?string $paginationToken A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
	 * @param ?string $status The status of an inbound plan.
	 * @param ?string $sortBy Sort by field.
	 * @param ?string $sortOrder The sort order.
	 */
	public function listInboundPlans(
		?int $pageSize = null,
		?string $paginationToken = null,
		?string $status = null,
		?string $sortBy = null,
		?string $sortOrder = null,
	): Response
	{
		$request = new ListInboundPlans($pageSize, $paginationToken, $status, $sortBy, $sortOrder);
		return $this->connector->send($request);
	}


	/**
	 * @param CreateInboundPlanRequest $createInboundPlanRequest The `createInboundPlan` request.
	 */
	public function createInboundPlan(CreateInboundPlanRequest $createInboundPlanRequest): Response
	{
		$request = new CreateInboundPlan($createInboundPlanRequest);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 */
	public function getInboundPlan(string $inboundPlanId): Response
	{
		$request = new GetInboundPlan($inboundPlanId);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param ?int $pageSize The number of boxes to return in the response matching the given query.
	 * @param ?string $paginationToken A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
	 */
	public function listInboundPlanBoxes(
		string $inboundPlanId,
		?int $pageSize = null,
		?string $paginationToken = null,
	): Response
	{
		$request = new ListInboundPlanBoxes($inboundPlanId, $pageSize, $paginationToken);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 */
	public function cancelInboundPlan(string $inboundPlanId): Response
	{
		$request = new CancelInboundPlan($inboundPlanId);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param ?int $pageSize The number of items to return in the response matching the given query.
	 * @param ?string $paginationToken A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
	 */
	public function listInboundPlanItems(
		string $inboundPlanId,
		?int $pageSize = null,
		?string $paginationToken = null,
	): Response
	{
		$request = new ListInboundPlanItems($inboundPlanId, $pageSize, $paginationToken);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param SetPackingInformationRequest $setPackingInformationRequest `setPackingInformation` request.
	 */
	public function setPackingInformation(
		string $inboundPlanId,
		SetPackingInformationRequest $setPackingInformationRequest,
	): Response
	{
		$request = new SetPackingInformation($inboundPlanId, $setPackingInformationRequest);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param ?int $pageSize The number of packing options to return in the response matching the given query.
	 * @param ?string $paginationToken A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
	 */
	public function listPackingOptions(
		string $inboundPlanId,
		?int $pageSize = null,
		?string $paginationToken = null,
	): Response
	{
		$request = new ListPackingOptions($inboundPlanId, $pageSize, $paginationToken);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 */
	public function generatePackingOptions(string $inboundPlanId): Response
	{
		$request = new GeneratePackingOptions($inboundPlanId);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $packingOptionId Identifier to a packing option.
	 */
	public function confirmPackingOption(string $inboundPlanId, string $packingOptionId): Response
	{
		$request = new ConfirmPackingOption($inboundPlanId, $packingOptionId);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $packingOptionId Identifier to a packing option.
	 * @param string $packingGroupId Identifier to a packing group.
	 * @param ?int $pageSize The number of packing group items to return in the response matching the given query.
	 * @param ?string $paginationToken A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
	 */
	public function listPackingGroupItems(
		string $inboundPlanId,
		string $packingOptionId,
		string $packingGroupId,
		?int $pageSize = null,
		?string $paginationToken = null,
	): Response
	{
		$request = new ListPackingGroupItems($inboundPlanId, $packingOptionId, $packingGroupId, $pageSize, $paginationToken);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param ?int $pageSize The number of pallets to return in the response matching the given query.
	 * @param ?string $paginationToken A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
	 */
	public function listInboundPlanPallets(
		string $inboundPlanId,
		?int $pageSize = null,
		?string $paginationToken = null,
	): Response
	{
		$request = new ListInboundPlanPallets($inboundPlanId, $pageSize, $paginationToken);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param ?int $pageSize The number of placement options to return in the response matching the given query.
	 * @param ?string $paginationToken A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
	 */
	public function listPlacementOptions(
		string $inboundPlanId,
		?int $pageSize = null,
		?string $paginationToken = null,
	): Response
	{
		$request = new ListPlacementOptions($inboundPlanId, $pageSize, $paginationToken);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param GeneratePlacementOptionsRequest $generatePlacementOptionsRequest The `generatePlacementOptions` request.
	 */
	public function generatePlacementOptions(
		string $inboundPlanId,
		GeneratePlacementOptionsRequest $generatePlacementOptionsRequest,
	): Response
	{
		$request = new GeneratePlacementOptions($inboundPlanId, $generatePlacementOptionsRequest);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $placementOptionId Identifier to a placement option. A placement option represents the shipment splits and destinations of SKUs.
	 */
	public function confirmPlacementOption(string $inboundPlanId, string $placementOptionId): Response
	{
		$request = new ConfirmPlacementOption($inboundPlanId, $placementOptionId);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $shipmentId Identifier to a shipment. A shipment contains the boxes and units being inbounded.
	 */
	public function getShipment(string $inboundPlanId, string $shipmentId): Response
	{
		$request = new GetShipment($inboundPlanId, $shipmentId);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $shipmentId Identifier to a shipment. A shipment contains the boxes and units being inbounded.
	 */
	public function getDeliveryChallanDocument(string $inboundPlanId, string $shipmentId): Response
	{
		$request = new GetDeliveryChallanDocument($inboundPlanId, $shipmentId);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $shipmentId Identifier to a shipment. A shipment contains the boxes and units being inbounded.
	 * @param UpdateShipmentDeliveryWindowRequest $updateShipmentDeliveryWindowRequest The `updateShipmentDeliveryWindow` request.
	 */
	public function updateShipmentDeliveryWindow(
		string $inboundPlanId,
		string $shipmentId,
		UpdateShipmentDeliveryWindowRequest $updateShipmentDeliveryWindowRequest,
	): Response
	{
		$request = new UpdateShipmentDeliveryWindow($inboundPlanId, $shipmentId, $updateShipmentDeliveryWindowRequest);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $shipmentId Identifier to a shipment. A shipment contains the boxes and units being inbounded.
	 * @param ?int $pageSize The number of self ship appointment slots to return in the response matching the given query.
	 * @param ?string $paginationToken A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
	 */
	public function getSelfShipAppointmentSlots(
		string $inboundPlanId,
		string $shipmentId,
		?int $pageSize = null,
		?string $paginationToken = null,
	): Response
	{
		$request = new GetSelfShipAppointmentSlots($inboundPlanId, $shipmentId, $pageSize, $paginationToken);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $shipmentId Identifier to a shipment. A shipment contains the boxes and units being inbounded.
	 * @param GenerateSelfShipAppointmentSlotsRequest $generateSelfShipAppointmentSlotsRequest The `generateSelfShipAppointmentSlots` request.
	 */
	public function generateSelfShipAppointmentSlots(
		string $inboundPlanId,
		string $shipmentId,
		GenerateSelfShipAppointmentSlotsRequest $generateSelfShipAppointmentSlotsRequest,
	): Response
	{
		$request = new GenerateSelfShipAppointmentSlots($inboundPlanId, $shipmentId, $generateSelfShipAppointmentSlotsRequest);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $shipmentId Identifier to a shipment. A shipment contains the boxes and units being inbounded.
	 * @param string $slotId Identifier to a self-ship appointment slot.
	 * @param CancelSelfShipAppointmentRequest $cancelSelfShipAppointmentRequest The `cancelSelfShipAppointment` request.
	 */
	public function cancelSelfShipAppointment(
		string $inboundPlanId,
		string $shipmentId,
		string $slotId,
		CancelSelfShipAppointmentRequest $cancelSelfShipAppointmentRequest,
	): Response
	{
		$request = new CancelSelfShipAppointment($inboundPlanId, $shipmentId, $slotId, $cancelSelfShipAppointmentRequest);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $shipmentId Identifier to a shipment. A shipment contains the boxes and units being inbounded.
	 * @param string $slotId Identifier to a self-ship appointment slot.
	 * @param ScheduleSelfShipAppointmentRequest $scheduleSelfShipAppointmentRequest `scheduleSelfShipAppointment` request.
	 */
	public function scheduleSelfShipAppointment(
		string $inboundPlanId,
		string $shipmentId,
		string $slotId,
		ScheduleSelfShipAppointmentRequest $scheduleSelfShipAppointmentRequest,
	): Response
	{
		$request = new ScheduleSelfShipAppointment($inboundPlanId, $shipmentId, $slotId, $scheduleSelfShipAppointmentRequest);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $shipmentId Identifier to a shipment. A shipment contains the boxes and units being inbounded.
	 * @param UpdateShipmentTrackingDetailsRequest $updateShipmentTrackingDetailsRequest The `updateShipmentTrackingDetails` request.
	 */
	public function updateShipmentTrackingDetails(
		string $inboundPlanId,
		string $shipmentId,
		UpdateShipmentTrackingDetailsRequest $updateShipmentTrackingDetailsRequest,
	): Response
	{
		$request = new UpdateShipmentTrackingDetails($inboundPlanId, $shipmentId, $updateShipmentTrackingDetailsRequest);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param ?int $pageSize The number of transportation options to return in the response matching the given query.
	 * @param ?string $paginationToken A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
	 * @param ?string $placementOptionId The placement option to get transportation options for. Either placementOptionId or shipmentId must be specified.
	 * @param ?string $shipmentId The shipment to get transportation options for. Either placementOptionId or shipmentId must be specified.
	 */
	public function listTransportationOptions(
		string $inboundPlanId,
		?int $pageSize = null,
		?string $paginationToken = null,
		?string $placementOptionId = null,
		?string $shipmentId = null,
	): Response
	{
		$request = new ListTransportationOptions($inboundPlanId, $pageSize, $paginationToken, $placementOptionId, $shipmentId);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param GenerateTransportationOptionsRequest $generateTransportationOptionsRequest The `generateTransportationOptions` request.
	 */
	public function generateTransportationOptions(
		string $inboundPlanId,
		GenerateTransportationOptionsRequest $generateTransportationOptionsRequest,
	): Response
	{
		$request = new GenerateTransportationOptions($inboundPlanId, $generateTransportationOptionsRequest);
		return $this->connector->send($request);
	}


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param ConfirmTransportationOptionsRequest $confirmTransportationOptionsRequest The `confirmTransportationOptions` request.
	 */
	public function confirmTransportationOptions(
		string $inboundPlanId,
		ConfirmTransportationOptionsRequest $confirmTransportationOptionsRequest,
	): Response
	{
		$request = new ConfirmTransportationOptions($inboundPlanId, $confirmTransportationOptionsRequest);
		return $this->connector->send($request);
	}


	/**
	 * @param array $mskus List of merchant SKUs, a merchant-supplied identifier for a specific SKU.
	 * @param string $marketplaceId The Marketplace ID. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a list of possible values.
	 */
	public function listItemComplianceDetails(array $mskus, string $marketplaceId): Response
	{
		$request = new ListItemComplianceDetails($mskus, $marketplaceId);
		return $this->connector->send($request);
	}


	/**
	 * @param UpdateItemComplianceDetailsRequest $updateItemComplianceDetailsRequest The `updateItemComplianceDetails` request.
	 * @param string $marketplaceId The Marketplace ID. Refer to [Marketplace IDs](https://developer-docs.amazon.com/sp-api/docs/marketplace-ids) for a list of possible values.
	 */
	public function updateItemComplianceDetails(
		UpdateItemComplianceDetailsRequest $updateItemComplianceDetailsRequest,
		string $marketplaceId,
	): Response
	{
		$request = new UpdateItemComplianceDetails($updateItemComplianceDetailsRequest, $marketplaceId);
		return $this->connector->send($request);
	}


	/**
	 * @param string $operationId Identifier to an asynchronous operation.
	 */
	public function getInboundOperationStatus(string $operationId): Response
	{
		$request = new GetInboundOperationStatus($operationId);
		return $this->connector->send($request);
	}
}
