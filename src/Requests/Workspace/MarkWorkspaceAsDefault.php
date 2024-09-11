<?php

namespace Andreapozza\LaravelYousign\Requests\Workspace;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * markWorkspaceAsDefault
 *
 * Marks the given Workspace as default.
 */
class MarkWorkspaceAsDefault extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/workspaces/default";
	}


	public function __construct()
	{
	}
}
