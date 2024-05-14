<?php

namespace SellingPartnerApi\Seller\FBAInboundV0\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\CommonTransportResult;
use SellingPartnerApi\Seller\FBAInboundV0\Dto\Error;

final class ConfirmTransportResponse extends BaseResponse
{
    protected static array $complexArrayTypes = ['errors' => [Error::class]];

    /**
     * @param  ?CommonTransportResult  $payload
     * @param  Error[]|null  $errors  A list of error responses returned when a request is unsuccessful.
     */
    public function __construct(
        public readonly ?CommonTransportResult $payload = null,
        public readonly ?array $errors = null,
    ) {
    }
}
