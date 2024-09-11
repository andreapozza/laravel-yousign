<?php

namespace Andreapozza\LaravelYousign\Requests\Contact;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-contact
 *
 * Creates a new Contact.
 */
class PostContact extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/contacts";
	}


	public function __construct()
	{
	}
}
