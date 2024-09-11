<?php

namespace Andreapozza\LaravelYousign\Requests\SignerDocumentRequest;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * put-signature_requests-signatureRequestId-document_requests-documentRequestId-signers-signerId
 *
 * Adds a Signer to a given Signer Document Request. This action is only permitted when the Signature
 * Request is a draft.
 */
class PutSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId extends Request
{
	protected Method $method = Method::PUT;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/document_requests/{$this->documentRequestId}/signers/{$this->signerId}";
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $documentRequestId Signer Document Request Id
	 * @param string $signerId Signer Id
	 */
	public function __construct(
		protected string $signatureRequestId,
		protected string $documentRequestId,
		protected string $signerId,
	) {
	}
}
