<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Box;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pagination;

final class ListInboundPlanBoxesResponse extends Response
{
    protected static array $complexArrayTypes = ['boxes' => [Box::class]];

    /**
     * @param  Box[]  $boxes  A list of boxes in an inbound plan.
     * @param  ?Pagination  $pagination  Contains tokens to fetch from a certain page.
     */
    public function __construct(
        public readonly array $boxes,
        public readonly ?Pagination $pagination = null,
    ) {
    }
}
