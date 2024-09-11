<?php

namespace Andreapozza\LaravelYousign\Requests\User;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-users
 *
 * Returns the list of all the Users within your organization.
 */
class GetUsers extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/users";
	}


	/**
	 * @param null|int $limit The limit of items count to retrieve.
	 */
	public function __construct(
		protected ?int $limit = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['limit' => $this->limit]);
	}
}
