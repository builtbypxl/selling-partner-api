<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class InboundPlanSummary extends BaseDto
{
	/**
	 * @param ContactInformation $contactInformation The seller's contact information.
	 * @param DateTime $createdAt The ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param DateTime $lastUpdatedAt ISO 8601 datetime with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
	 * @param string[] $marketplaceIds Marketplace IDs.
	 * @param string $name Human-readable name of the inbound plan.
	 * @param Address $sourceAddress Specific details to identify a place.
	 * @param string $status Current status of the inbound plan. Can be 'ACTIVE', 'VOIDED', or 'SHIPPED'.
	 */
	public function __construct(
		public readonly ContactInformation $contactInformation,
		public readonly \DateTime $createdAt,
		public readonly string $inboundPlanId,
		public readonly \DateTime $lastUpdatedAt,
		public readonly array $marketplaceIds,
		public readonly string $name,
		public readonly Address $sourceAddress,
		public readonly string $status,
	) {
	}
}
