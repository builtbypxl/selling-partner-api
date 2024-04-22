<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pagination;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\TransportationOption;

final class ListTransportationOptionsResponse extends BaseResponse
{
	protected static array $complexArrayTypes = ['transportationOptions' => [TransportationOption::class]];


	/**
	 * @param TransportationOption[] $transportationOptions Transportation options generated for the placement option.
	 * @param ?Pagination $pagination Contains tokens to fetch from a certain page.
	 */
	public function __construct(
		public readonly array $transportationOptions,
		public readonly ?Pagination $pagination = null,
	) {
	}
}
