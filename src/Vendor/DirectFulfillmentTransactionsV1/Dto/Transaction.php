<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentTransactionsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Transaction extends BaseDto
{
	protected static array $complexArrayTypes = ['errors' => [Error::class]];


	/**
	 * @param string $transactionId The unique identifier sent in the 'transactionId' field in response to the post request of a specific transaction.
	 * @param string $status Current processing status of the transaction.
	 * @param Error[]|null $errors A list of error responses returned when a request is unsuccessful.
	 */
	public function __construct(
		public readonly string $transactionId,
		public readonly string $status,
		public readonly ?array $errors = null,
	) {
	}
}
