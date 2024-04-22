<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class DocumentDownload extends BaseDto
{
	/**
	 * @param string $downloadType The type of download. Can be `URL` or `PDF_BASE64`.
	 * @param string $uri Uniform resource identifier to identify where the document is located.
	 * @param ?DateTime $expiration The timestamp of expiration of the URI. This is in ISO 8601 datetime format with pattern `yyyy-MM-ddTHH:mm:ss.sssZ`.
	 */
	public function __construct(
		public readonly string $downloadType,
		public readonly string $uri,
		public readonly ?\DateTime $expiration = null,
	) {
	}
}
