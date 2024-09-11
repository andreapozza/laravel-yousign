<?php

namespace Andreapozza\LaravelYousign\Requests\Workspace;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-workspaces
 *
 * Returns the list of all Workspaces within your Organization.
 */
class GetWorkspaces extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/workspaces";
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
