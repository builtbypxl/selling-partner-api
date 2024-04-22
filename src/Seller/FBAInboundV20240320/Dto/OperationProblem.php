<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class OperationProblem extends BaseDto
{
	/**
	 * @param string $code An error code that identifies the type of error that occurred.
	 * @param string $message A message that describes the error condition.
	 * @param string $severity The severity of the problem. Can be 'WARNING', or 'ERROR'.
	 * @param ?string $details Additional details that can help the caller understand or fix the issue.
	 */
	public function __construct(
		public readonly string $code,
		public readonly string $message,
		public readonly string $severity,
		public readonly ?string $details = null,
	) {
	}
}
