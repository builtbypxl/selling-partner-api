<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV0\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\BillOfLadingDownloadUrl;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\Error;

final class GetBillOfLadingResponse extends Response
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?BillOfLadingDownloadUrl  $payload  Download URL for the bill of lading.
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?BillOfLadingDownloadUrl $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
