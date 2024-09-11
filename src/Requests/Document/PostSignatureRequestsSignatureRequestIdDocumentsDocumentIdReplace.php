<?php

namespace Andreapozza\LaravelYousign\Requests\Document;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-signature_requests-signatureRequestId-documents-documentId-replace
 *
 * Replace the file of a given Document.
 */
class PostSignatureRequestsSignatureRequestIdDocumentsDocumentIdReplace extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/documents/{$this->documentId}/replace";
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $documentId Document Id
	 */
	public function __construct(
		protected string $signatureRequestId,
		protected string $documentId,
	) {
	}
}
