<?php

namespace Andreapozza\LaravelYousign\Requests\Webhook;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-webhooks
 *
 * Returns the list of all Webhook subscriptions in your Organization.
 */
class GetWebhooks extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/webhooks";
	}


	public function __construct()
	{
	}
}
