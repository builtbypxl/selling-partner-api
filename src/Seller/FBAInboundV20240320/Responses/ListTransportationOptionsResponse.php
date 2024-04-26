<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pagination;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\TransportationOption;

final class ListTransportationOptionsResponse extends Response
{
    protected static array $complexArrayTypes = ['transportationOptions' => [TransportationOption::class]];

    /**
     * @param  TransportationOption[]  $transportationOptions  Transportation options generated for the placement option.
     * @param  ?Pagination  $pagination  Contains tokens to fetch from a certain page.
     */
    public function __construct(
        public readonly array $transportationOptions,
        public readonly ?Pagination $pagination = null,
    ) {
    }
}
