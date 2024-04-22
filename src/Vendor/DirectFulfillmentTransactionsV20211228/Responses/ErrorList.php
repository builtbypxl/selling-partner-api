<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV20211228\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;

final class ErrorList extends BaseResponse
{
	protected static array $complexArrayTypes = ['errors' => [Error::class]];


	/**
	 * @param Error[] $errors
	 */
	public function __construct(
		public readonly array $errors,
	) {
	}
}
