<?php

namespace Andreapozza\LaravelYousign\Requests\Contact;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-contacts-contactId
 *
 * Deletes a given Contact.
 */
class DeleteContactsContactId extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/contacts/{$this->contactId}";
	}


	/**
	 * @param string $contactId Contact Id
	 */
	public function __construct(
		protected string $contactId,
	) {
	}
}
