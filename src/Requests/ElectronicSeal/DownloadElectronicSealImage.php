<?php

namespace Andreapozza\LaravelYousign\Requests\ElectronicSeal;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * download-electronic-seal-image
 */
class DownloadElectronicSealImage extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/electronic_seal_images/{$this->electronicSealImageId}/download";
	}


	/**
	 * @param string $electronicSealImageId
	 */
	public function __construct(
		protected string $electronicSealImageId,
	) {
	}
}
