<?php

namespace Andreapozza\LaravelYousign\Requests\SignerDocumentRequest;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-signature_requests-signatureRequestId-document_requests-documentRequestId
 *
 * Delete a Signer Document Request from signature request. This action is only permitted when the
 * Signature Request is a draft.
 */
class DeleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestId extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/document_requests/{$this->documentRequestId}";
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $documentRequestId Signer Document Request Id
	 */
	public function __construct(
		protected string $signatureRequestId,
		protected string $documentRequestId,
	) {
	}
}
