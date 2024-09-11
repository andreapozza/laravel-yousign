<?php

namespace Andreapozza\LaravelYousign\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-documents-documentId
 *
 * Retrieves a given Document.
 */
class GetSignatureRequestsSignatureRequestIdDocumentsDocumentId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/documents/{$this->documentId}";
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
