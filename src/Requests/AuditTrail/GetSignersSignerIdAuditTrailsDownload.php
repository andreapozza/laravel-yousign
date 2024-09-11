<?php

namespace Andreapozza\LaravelYousign\Requests\AuditTrail;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signers-signerId-audit_trails-download
 *
 * Download the PDF version of the Audit Trail attached to a given Signer. Only possible when Signer
 * status is `signed`.
 */
class GetSignersSignerIdAuditTrailsDownload extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/signers/{$this->signerId}/audit_trails/download";
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
