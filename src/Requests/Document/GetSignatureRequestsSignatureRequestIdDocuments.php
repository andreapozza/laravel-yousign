<?php

namespace Andreapozza\LaravelYousign\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-documents
 *
 * Returns a list of Documents for a given Signature Request.
 */
class GetSignatureRequestsSignatureRequestIdDocuments extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/documents";
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param null|string $nature Filter by nature
	 */
	public function __construct(
		protected string $signatureRequestId,
		protected ?string $nature = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['nature' => $this->nature]);
	}
}
