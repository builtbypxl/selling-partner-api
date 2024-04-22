<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\DocumentDownload;

final class GetDeliveryChallanDocumentResponse extends BaseResponse
{
	/**
	 * @param DocumentDownload $documentDownload Resource to download the requested document.
	 */
	public function __construct(
		public readonly DocumentDownload $documentDownload,
	) {
	}
}
