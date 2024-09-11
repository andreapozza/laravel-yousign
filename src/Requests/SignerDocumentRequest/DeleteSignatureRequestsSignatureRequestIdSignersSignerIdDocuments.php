<?php

namespace Andreapozza\LaravelYousign\Requests\SignerDocumentRequest;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-signature_requests-signatureRequestId-signers-signerId-documents
 *
 * Deletes all documents uploaded by a given Signer for a specific Signature Request.
 * Deletion is only
 * possible when Signer status is `signed`.
 */
class DeleteSignatureRequestsSignatureRequestIdSignersSignerIdDocuments extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/signers/{$this->signerId}/documents";
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $signerId Signer Id
	 */
	public function __construct(
		protected string $signatureRequestId,
		protected string $signerId,
	) {
	}
}
