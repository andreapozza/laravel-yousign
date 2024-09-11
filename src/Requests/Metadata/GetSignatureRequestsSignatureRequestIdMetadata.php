<?php

namespace Andreapozza\LaravelYousign\Requests\Metadata;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-metadata
 *
 * Retrieves the Metadata of a given Signature Request.
 */
class GetSignatureRequestsSignatureRequestIdMetadata extends Request
{
	protected Method $method = Method::GET;


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
