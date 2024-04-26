<?php

declare(strict_types=1);

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Response;
use SellingPartnerApi\Request;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\InboundPlan;

/**
 * getInboundPlan
 */
class GetInboundPlan extends Request
{
    protected Method $method = Method::GET;

    /**
     * @param  string  $inboundPlanId  Identifier to an inbound plan.
     */
    public function __construct(
        protected string $inboundPlanId,
    ) {
    }

    public function resolveEndpoint(): string
    {
        return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}";
    }

    public function createDtoFromResponse(Response $response): InboundPlan|ErrorList
    {
        $status = $response->status();
        $responseCls = match ($status) {
            200 => InboundPlan::class,
            400, 500, 403, 404, 413, 415, 429, 503 => ErrorList::class,
            default => throw new Exception("Unhandled response status: {$status}")
        };

        return $responseCls::deserialize($response->json(), $responseCls);
    }
}
