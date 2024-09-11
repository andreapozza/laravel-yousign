<?php

namespace Andreapozza\LaravelYousign\Requests\Document;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * patch-signature_requests-signatureRequestId-documents-documentId
 *
 * Updates a given Document. Any parameters not provided are left unchanged.
 */
class PatchSignatureRequestsSignatureRequestIdDocumentsDocumentId extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


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
