<?php

namespace Andreapozza\LaravelYousign\Requests\Webhook;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-webhooks-webhookId
 *
 * Deletes a given Webhook subscription.
 */
class DeleteWebhooksWebhookId extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/webhooks/{$this->webhookId}";
	}


	/**
	 * @param string $webhookId Webhook Id
	 */
	public function __construct(
		protected string $webhookId,
	) {
	}
}
