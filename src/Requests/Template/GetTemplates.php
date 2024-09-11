<?php

namespace Andreapozza\LaravelYousign\Requests\Template;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-templates
 *
 * Returns the list of all Templates within your Organization.
 */
class GetTemplates extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/templates";
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
