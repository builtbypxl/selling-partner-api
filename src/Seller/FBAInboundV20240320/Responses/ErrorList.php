<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Error;

final class ErrorList extends BaseResponse
{
	protected static array $complexArrayTypes = ['errors' => [Error::class]];


	/**
	 * @param Error[] $errors List of errors.
	 */
	public function __construct(
		public readonly array $errors,
	) {
	}
}
