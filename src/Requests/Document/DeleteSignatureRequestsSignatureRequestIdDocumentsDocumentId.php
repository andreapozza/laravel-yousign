<?php

namespace Andreapozza\LaravelYousign\Requests\Document;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-signature_requests-signatureRequestId-documents-documentId
 *
 * Deletes a given Document from a Signature Request.
 */
class DeleteSignatureRequestsSignatureRequestIdDocumentsDocumentId extends Request
{
	protected Method $method = Method::DELETE;


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
