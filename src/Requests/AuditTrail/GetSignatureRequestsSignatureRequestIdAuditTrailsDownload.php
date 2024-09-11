<?php

namespace Andreapozza\LaravelYousign\Requests\AuditTrail;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-audit_trails-download
 *
 * Download the PDF version of all the Audit Trails attached to a given Signature Request. Each Audit
 * Trail is bound to a different Signer. Only possible when the Signature Request status is `done`.
 */
class GetSignatureRequestsSignatureRequestIdAuditTrailsDownload extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/audit_trails/download";
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param null|bool $merge Download all Audit Trails merged as a single PDF file
	 */
	public function __construct(
		protected string $signatureRequestId,
		protected ?bool $merge = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['merge' => $this->merge]);
	}
}
