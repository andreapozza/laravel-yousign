<?php

namespace Andreapozza\LaravelYousign\Requests\SignatureRequest;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-signature_requests
 *
 * Creates a new Signature Request resource.
 */
class PostSignatureRequests extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/signature_requests";
	}


	public function __construct()
	{
	}
}
