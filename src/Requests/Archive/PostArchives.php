<?php

namespace Andreapozza\LaravelYousign\Requests\Archive;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-archives
 *
 * Archive a file in a secure digital safe for 10 years
 */
class PostArchives extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/archives";
	}


	public function __construct()
	{
	}
}
