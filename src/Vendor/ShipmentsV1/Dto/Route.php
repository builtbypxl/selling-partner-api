<?php

namespace SellingPartnerApi\Vendor\ShipmentsV1\Dto;

use Crescat\SaloonSdkGenerator\BaseDto;

final class Route extends BaseDto
{
	protected static array $complexArrayTypes = ['stops' => [Stop::class]];


	/**
	 * @param Stop[] $stops The port or location involved in transporting the cargo, as specified in transportation contracts or operational plans.
	 */
	public function __construct(
		public readonly array $stops,
	) {
	}
}
