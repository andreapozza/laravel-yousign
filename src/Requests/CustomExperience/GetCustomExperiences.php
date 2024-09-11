<?php

namespace Andreapozza\LaravelYousign\Requests\CustomExperience;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-custom_experiences
 *
 * Returns the list of all Custom Experiences in your Organization.
 * You can limit the number of items
 * returned by using pagination.
 */
class GetCustomExperiences extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/custom_experiences";
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
