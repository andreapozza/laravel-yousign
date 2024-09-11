<?php

namespace Andreapozza\LaravelYousign\Resource;

use Andreapozza\LaravelYousign\Requests\Workspace\DeleteWorkspace;
use Andreapozza\LaravelYousign\Requests\Workspace\GetWorkspaces;
use Andreapozza\LaravelYousign\Requests\Workspace\GetWorkspacesDefault;
use Andreapozza\LaravelYousign\Requests\Workspace\GetWorkspacesWorkspaceId;
use Andreapozza\LaravelYousign\Requests\Workspace\MarkWorkspaceAsDefault;
use Andreapozza\LaravelYousign\Requests\Workspace\PatchWorkspacesWorkspaceId;
use Andreapozza\LaravelYousign\Requests\Workspace\PostWorkspace;
use Andreapozza\LaravelYousign\Resource;
use Saloon\Http\Response;

class Workspace extends Resource
{
	/**
	 * @param int $limit The limit of items count to retrieve.
	 */
	public function getWorkspaces(?int $limit): Response
	{
		return $this->connector->send(new GetWorkspaces($limit));
	}


	public function postWorkspace(): Response
	{
		return $this->connector->send(new PostWorkspace());
	}


	public function getWorkspacesDefault(): Response
	{
		return $this->connector->send(new GetWorkspacesDefault());
	}


	public function markWorkspaceAsDefault(): Response
	{
		return $this->connector->send(new MarkWorkspaceAsDefault());
	}


	/**
	 * @param string $workspaceId Workspace Id
	 */
	public function getWorkspacesWorkspaceId(string $workspaceId): Response
	{
		return $this->connector->send(new GetWorkspacesWorkspaceId($workspaceId));
	}


	/**
	 * @param string $workspaceId Workspace Id
	 */
	public function deleteWorkspace(string $workspaceId): Response
	{
		return $this->connector->send(new DeleteWorkspace($workspaceId));
	}


	/**
	 * @param string $workspaceId Workspace Id
	 */
	public function patchWorkspacesWorkspaceId(string $workspaceId): Response
	{
		return $this->connector->send(new PatchWorkspacesWorkspaceId($workspaceId));
	}
}
