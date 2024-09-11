<?php

namespace Andreapozza\LaravelYousign\Requests\Workspace;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-workspace
 *
 * Creates a new Workspace in the organization.
 */
class PostWorkspace extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/workspaces";
	}


	public function __construct()
	{
	}
}
