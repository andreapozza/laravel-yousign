<?php

namespace Andreapozza\LaravelYousign\Requests\CustomExperience;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * patch-custom_experiences-customExperienceId
 *
 * Updates a given Custom Experience.
 * Any parameters not provided are left unchanged.
 */
class PatchCustomExperiencesCustomExperienceId extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


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
