<?php

namespace Andreapozza\LaravelYousign\Requests\Workspace;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-workspaces-workspaceId
 *
 * Retrieves a given Workspace.
 */
class GetWorkspacesWorkspaceId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/workspaces/{$this->workspaceId}";
	}


	/**
	 * @param string $workspaceId Workspace Id
	 */
	public function __construct(
		protected string $workspaceId,
	) {
	}
}
