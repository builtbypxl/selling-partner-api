<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Item;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pagination;

final class ListInboundPlanItemsResponse extends BaseResponse
{
	protected static array $complexArrayTypes = ['items' => [Item::class]];


	/**
	 * @param Item[] $items Items contained within the box.
	 * @param ?Pagination $pagination Contains tokens to fetch from a certain page.
	 */
	public function __construct(
		public readonly array $items,
		public readonly ?Pagination $pagination = null,
	) {
	}
}
