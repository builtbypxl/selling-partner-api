<?php

namespace SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Responses;

use Crescat\SaloonSdkGenerator\BaseResponse;
use SellingPartnerApi\Seller\ProductTypeDefinitionsV20200901\Dto\ProductType;

final class ProductTypeList extends BaseResponse
{
	protected static array $complexArrayTypes = ['productTypes' => [ProductType::class]];


	/**
	 * @param ProductType[] $productTypes
	 * @param string $productTypeVersion Amazon product type version identifier.
	 */
	public function __construct(
		public readonly array $productTypes,
		public readonly string $productTypeVersion,
	) {
	}
}
