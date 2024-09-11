<?php

namespace Andreapozza\LaravelYousign\Requests\CustomExperience;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-custom_experience-logo
 *
 * Deletes the logo of a Custom Experience.
 */
class DeleteCustomExperienceLogo extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/custom_experiences/{$this->customExperienceId}/logo";
	}


	/**
	 * @param string $customExperienceId Custom Experience Id
	 */
	public function __construct(
		protected string $customExperienceId,
	) {
	}
}
