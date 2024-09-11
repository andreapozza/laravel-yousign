<?php

namespace Andreapozza\LaravelYousign\Requests\Webhook;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-webhooks-subscriptions
 *
 * Creates a new Webhook subscription in your organization.
 */
class PostWebhooksSubscriptions extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/webhooks";
	}


	public function __construct()
	{
	}
}
