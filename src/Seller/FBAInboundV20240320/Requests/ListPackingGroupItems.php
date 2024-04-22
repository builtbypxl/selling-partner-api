<?php

namespace SellingPartnerApi\Seller\FBAInboundV20240320\Requests;

use Exception;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ErrorList;
use SellingPartnerApi\Seller\FBAInboundV20240320\Responses\ListPackingGroupItemsResponse;

/**
 * listPackingGroupItems
 */
class ListPackingGroupItems extends Request
{
	protected Method $method = Method::GET;


	/**
	 * @param string $inboundPlanId Identifier to an inbound plan.
	 * @param string $packingOptionId Identifier to a packing option.
	 * @param string $packingGroupId Identifier to a packing group.
	 * @param ?int $pageSize The number of packing group items to return in the response matching the given query.
	 * @param ?string $paginationToken A token to fetch a certain page when there are multiple pages worth of results. The value of this token is fetched from the `pagination` returned in the API response. In the absence of the token value from the query parameter the API returns the first page of the result.
	 */
	public function __construct(
		protected string $inboundPlanId,
		protected string $packingOptionId,
		protected string $packingGroupId,
		protected ?int $pageSize = null,
		protected ?string $paginationToken = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['pageSize' => $this->pageSize, 'paginationToken' => $this->paginationToken]);
	}


	public function resolveEndpoint(): string
	{
		return "/inbound/fba/2024-03-20/inboundPlans/{$this->inboundPlanId}/packingOptions/{$this->packingOptionId}/packingGroups/{$this->packingGroupId}/items";
	}


	public function createDtoFromResponse(Response $response): ListPackingGroupItemsResponse|ErrorList
	{
		$status = $response->status();
		$responseCls = match ($status) {
		    200 => ListPackingGroupItemsResponse::class,
		    400, 500, 403, 404, 413, 415, 429, 503 => ErrorList::class,
		    default => throw new Exception("Unhandled response status: {$status}")
		};
		return $responseCls::deserialize($response->json(), $responseCls);
	}
}
