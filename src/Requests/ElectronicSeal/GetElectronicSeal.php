<?php

namespace Andreapozza\LaravelYousign\Requests\ElectronicSeal;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-electronic-seal
 */
class GetElectronicSeal extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/electronic_seals/{$this->electronicSealId}";
	}


	/**
	 * @param string $electronicSealId
	 */
	public function __construct(
		protected string $electronicSealId,
	) {
	}
}
