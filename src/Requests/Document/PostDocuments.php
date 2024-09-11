<?php

namespace Andreapozza\LaravelYousign\Requests\Document;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-documents
 *
 * Deprecated endpoint, do not use.
 */
class PostDocuments extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/documents";
	}


	public function __construct()
	{
	}
}
