<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\InboundPlanSummary;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pagination;

final class ListInboundPlansResponse extends BaseResponse
{
	protected static array $complexArrayTypes = ['inboundPlans' => [InboundPlanSummary::class]];


	/**
	 * @param InboundPlanSummary[]|null $inboundPlans A list of inbound plans with minimal information.
	 * @param ?Pagination $pagination Contains tokens to fetch from a certain page.
	 */
	public function __construct(
		public readonly ?array $inboundPlans = null,
		public readonly ?Pagination $pagination = null,
	) {
	}
}
