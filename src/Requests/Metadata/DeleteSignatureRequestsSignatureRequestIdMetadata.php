<?php

namespace Andreapozza\LaravelYousign\Requests\Metadata;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-signature_requests-signatureRequestId-metadata
 *
 * Deletes the Metadata of a given Signature Request.
 */
class DeleteSignatureRequestsSignatureRequestIdMetadata extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/metadata";
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function __construct(
		protected string $signatureRequestId,
	) {
	}
}
