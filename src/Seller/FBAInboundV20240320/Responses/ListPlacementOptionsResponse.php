<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pagination;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\PlacementOption;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\PlacementOptionSummary;

final class ListPlacementOptionsResponse extends BaseResponse
{
	protected static array $complexArrayTypes = ['placementOptions' => [PlacementOption::class]];


	/**
	 * @param PlacementOption[] $placementOptions Placement options for the inbound plan. This property will be populated when it has been generated via the corresponding endpoint. If there is a chosen placement option, that will be the only returned option. Query the placement option for more details.
	 * @param ?Pagination $pagination Contains tokens to fetch from a certain page.
	 */
	public function __construct(
		public readonly array $placementOptions,
		public readonly ?Pagination $pagination = null,
	) {
	}
}
