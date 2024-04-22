<?php

namespace SellingPartnerApi\Seller\ListingsItemsV20210801\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Issue extends BaseDto
{
	/**
	 * @param string $code An issue code that identifies the type of issue.
	 * @param string $message A message that describes the issue.
	 * @param string $severity The severity of the issue.
	 * @param string[] $categories List of issue categories.
	 *
	 * Possible vales:
	 *
	 * * `INVALID_ATTRIBUTE` - Indicating an invalid attribute in the listing.
	 *
	 * * `MISSING_ATTRIBUTE` - Highlighting a missing attribute in the listing.
	 *
	 * * `INVALID_IMAGE` - Signifying an invalid image in the listing.
	 *
	 * * `MISSING_IMAGE` - Noting the absence of an image in the listing.
	 *
	 * * `INVALID_PRICE` - Pertaining to issues with the listing's price-related attributes.
	 *
	 * * `MISSING_PRICE` - Pointing out the absence of a price attribute in the listing.
	 *
	 * * `DUPLICATE` - Identifying listings with potential duplicate problems, such as this ASIN potentially being a duplicate of another ASIN.
	 *
	 * * `QUALIFICATION_REQUIRED` - Indicating that the listing requires qualification-related approval.
	 * @param ?string[] $attributeNames The names of the attributes associated with the issue, if applicable.
	 * @param ?IssueEnforcements $enforcements This field provides information about the enforcement actions taken by Amazon that affect the publishing or status of a listing. It also includes details about any associated exemptions.
	 */
	public function __construct(
		public readonly string $code,
		public readonly string $message,
		public readonly string $severity,
		public readonly array $categories,
		public readonly ?array $attributeNames = null,
		public readonly ?IssueEnforcements $enforcements = null,
	) {
	}
}
