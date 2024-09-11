<?php

namespace Andreapozza\LaravelYousign\Requests\Workspace;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-workspaces-default
 *
 * Retrieves the default Workspace.
 */
class GetWorkspacesDefault extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/workspaces/default";
	}


	public function __construct()
	{
	}
}
