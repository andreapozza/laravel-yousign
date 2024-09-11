<?php

namespace Andreapozza\LaravelYousign\Requests\AuditTrail;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-signers-signerId-audit_trails
 *
 * Retrieves the JSON version of the Audit Trail attached to a given Signer. Only possible when Signer
 * status is `signed`.
 */
class GetSignatureRequestsSignatureRequestIdSignersSignerIdAuditTrails extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/signers/{$this->signerId}/audit_trails";
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
