<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\ComplianceDetail;

final class ListItemComplianceDetailsResponse extends BaseResponse
{
	protected static array $complexArrayTypes = ['complianceDetails' => [ComplianceDetail::class]];


	/**
	 * @param ComplianceDetail[]|null $complianceDetails List of compliance details.
	 */
	public function __construct(
		public readonly ?array $complianceDetails = null,
	) {
	}
}
