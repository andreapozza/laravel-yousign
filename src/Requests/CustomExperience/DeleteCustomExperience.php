<?php

namespace Andreapozza\LaravelYousign\Requests\CustomExperience;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-custom_experience
 *
 * Deletes a given Custom Experience.
 */
class DeleteCustomExperience extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/custom_experiences/{$this->customExperienceId}";
	}


	/**
	 * @param string $customExperienceId Custom Experience Id
	 */
	public function __construct(
		protected string $customExperienceId,
	) {
	}
}
