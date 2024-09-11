<?php

namespace Andreapozza\LaravelYousign\Requests\SignerDocumentRequest;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-signers-signerId-documents
 *
 * Returns a list of Documents uploaded by a given Signer.
 * Only possible when Signer status is
 * `signed`.
 */
class GetSignatureRequestsSignatureRequestIdSignersSignerIdDocuments extends Request
{
	protected Method $method = Method::GET;


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
