<?php

namespace Andreapozza\LaravelYousign\Resource;

use Andreapozza\LaravelYousign\Requests\CustomExperience\DeleteCustomExperience;
use Andreapozza\LaravelYousign\Requests\CustomExperience\DeleteCustomExperienceLogo;
use Andreapozza\LaravelYousign\Requests\CustomExperience\GetCustomExperiences;
use Andreapozza\LaravelYousign\Requests\CustomExperience\GetCustomExperiencesCustomExperienceId;
use Andreapozza\LaravelYousign\Requests\CustomExperience\PatchCustomExperienceLogo;
use Andreapozza\LaravelYousign\Requests\CustomExperience\PatchCustomExperiencesCustomExperienceId;
use Andreapozza\LaravelYousign\Requests\CustomExperience\PostCustomExperience;
use Andreapozza\LaravelYousign\Resource;
use Saloon\Http\Response;

class CustomExperience extends Resource
{
	/**
	 * @param int $limit The limit of items count to retrieve.
	 */
	public function getCustomExperiences(?int $limit): Response
	{
		return $this->connector->send(new GetCustomExperiences($limit));
	}


	public function postCustomExperience(): Response
	{
		return $this->connector->send(new PostCustomExperience());
	}


	/**
	 * @param string $customExperienceId Custom Experience Id
	 */
	public function getCustomExperiencesCustomExperienceId(string $customExperienceId): Response
	{
		return $this->connector->send(new GetCustomExperiencesCustomExperienceId($customExperienceId));
	}


	/**
	 * @param string $customExperienceId Custom Experience Id
	 */
	public function deleteCustomExperience(string $customExperienceId): Response
	{
		return $this->connector->send(new DeleteCustomExperience($customExperienceId));
	}


	/**
	 * @param string $customExperienceId Custom Experience Id
	 */
	public function patchCustomExperiencesCustomExperienceId(string $customExperienceId): Response
	{
		return $this->connector->send(new PatchCustomExperiencesCustomExperienceId($customExperienceId));
	}


	/**
	 * @param string $customExperienceId Custom Experience Id
	 */
	public function patchCustomExperienceLogo(string $customExperienceId): Response
	{
		return $this->connector->send(new PatchCustomExperienceLogo($customExperienceId));
	}


	/**
	 * @param string $customExperienceId Custom Experience Id
	 */
	public function deleteCustomExperienceLogo(string $customExperienceId): Response
	{
		return $this->connector->send(new DeleteCustomExperienceLogo($customExperienceId));
	}
}
