<?php

namespace Andreapozza\LaravelYousign\Requests\ElectronicSeal;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-electronic-seal-image
 */
class DeleteElectronicSealImage extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/electronic_seal_images/{$this->electronicSealImageId}";
	}


	/**
	 * @param string $electronicSealImageId
	 */
	public function __construct(
		protected string $electronicSealImageId,
	) {
	}
}
