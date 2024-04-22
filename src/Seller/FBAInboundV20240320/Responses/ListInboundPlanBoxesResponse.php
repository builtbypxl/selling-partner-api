<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Box;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pagination;

final class ListInboundPlanBoxesResponse extends BaseResponse
{
	protected static array $complexArrayTypes = ['boxes' => [Box::class]];


	/**
	 * @param Box[] $boxes A list of boxes in an inbound plan.
	 * @param ?Pagination $pagination Contains tokens to fetch from a certain page.
	 */
	public function __construct(
		public readonly array $boxes,
		public readonly ?Pagination $pagination = null,
	) {
	}
}
