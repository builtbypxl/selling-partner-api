<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Responses;

use SellingPartnerApi\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pagination;
use SellingPartnerApi\Seller\FBAInboundV20240320\Dto\Pallet;

final class ListInboundPlanPalletsResponse extends Response
{
    protected static array $complexArrayTypes = ['pallets' => [Pallet::class]];

    /**
     * @param  Pallet[]  $pallets  The pallets in an inbound plan.
     * @param  ?Pagination  $pagination  Contains tokens to fetch from a certain page.
     */
    public function __construct(
        public readonly array $pallets,
        public readonly ?Pagination $pagination = null,
    ) {
    }
}
