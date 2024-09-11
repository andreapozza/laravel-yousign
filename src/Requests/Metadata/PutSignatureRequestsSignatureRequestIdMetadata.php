<?php

namespace Andreapozza\LaravelYousign\Requests\Metadata;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * put-signature_requests-signatureRequestId-metadata
 *
 * Updates the Metadata of a given Signature Request. Any parameters not provided are left unchanged.
 */
class PutSignatureRequestsSignatureRequestIdMetadata extends Request
{
	protected Method $method = Method::PUT;


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
