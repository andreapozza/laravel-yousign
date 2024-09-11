<?php

namespace Andreapozza\LaravelYousign\Requests\Consumption;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-consumptions
 *
 * Get signatures Consumption by source
 */
class GetConsumptions extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/consumptions";
	}


	/**
	 * @param string $from The "from" date must not be more than 1 year in the past
	 * @param string $to The "to" date must be more recent than the "from" date
	 * @param null|string $authenticationKey
	 */
	public function __construct(
		protected string $from,
		protected string $to,
		protected ?string $authenticationKey = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['from' => $this->from, 'to' => $this->to, 'authentication_key' => $this->authenticationKey]);
	}
}
