<?php

namespace Andreapozza\LaravelYousign\Requests\User;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-workspace-workspaceId-users-userId
 *
 * Removes a User from a given Workspace.
 */
class DeleteWorkspaceWorkspaceIdUsersUserId extends Request
{
	protected Method $method = Method::DELETE;


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
