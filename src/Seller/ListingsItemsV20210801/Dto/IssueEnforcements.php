<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class IssueEnforcements extends BaseDto
{
	protected static array $complexArrayTypes = ['actions' => [IssueEnforcementAction::class]];


	/**
	 * @param IssueEnforcementAction[] $actions List of enforcement actions taken by Amazon that affect the publishing or status of a listing.
	 * @param IssueExemption $exemption Conveying the status of the listed enforcement actions and, if applicable, provides information about the exemption's expiry date.
	 */
	public function __construct(
		public readonly array $actions,
		public readonly IssueExemption $exemption,
	) {
	}
}
