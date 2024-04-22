<?php

namespace SellingPartnerApi\Vendor\DirectFulfillmentShippingV20211228\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class SubmitShippingLabelsRequest extends BaseDto
{
	protected static array $complexArrayTypes = ['shippingLabelRequests' => [ShippingLabelRequest::class]];


	/**
	 * @param ShippingLabelRequest[]|null $shippingLabelRequests
	 */
	public function __construct(
		public readonly ?array $shippingLabelRequests = null,
	) {
	}
}
