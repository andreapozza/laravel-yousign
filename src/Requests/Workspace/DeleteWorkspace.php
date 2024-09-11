<?php

namespace Andreapozza\LaravelYousign\Requests\Workspace;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * deleteWorkspace
 *
 * Deletes a given Workspace and transfers everything that is attached to this Workspace to a another
 * specified Workspace.
 */
class DeleteWorkspace extends Request
{
	protected Method $method = Method::DELETE;


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
