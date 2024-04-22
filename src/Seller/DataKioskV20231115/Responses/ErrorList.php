<?php

namespace SellingPartnerApi\Seller\DataKioskV20231115\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\DataKioskV20231115\Dto\Error;

final class ErrorList extends BaseResponse
{
	protected static array $complexArrayTypes = ['errors' => [Error::class]];


	/**
	 * @param Error[] $errors Error response returned when the request is unsuccessful.
	 */
	public function __construct(
		public readonly array $errors,
	) {
	}
}
