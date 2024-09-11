<?php

namespace Andreapozza\LaravelYousign\Requests\User;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * put-workspaces-workspaceId-Users
 *
 * Associates a User with a given Workspace.
 */
class PutWorkspacesWorkspaceIdUsers extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/workspaces/{$this->workspaceId}/users/{$this->userId}";
	}


	/**
	 * @param string $workspaceId Workspace Id
	 * @param string $userId User Id
	 */
	public function __construct(
		protected string $workspaceId,
		protected string $userId,
	) {
	}
}
