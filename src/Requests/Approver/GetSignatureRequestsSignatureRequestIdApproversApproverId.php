<?php

namespace Andreapozza\LaravelYousign\Requests\Approver;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-approvers-approverId
 *
 * Retrieves a given Approver.
 */
class GetSignatureRequestsSignatureRequestIdApproversApproverId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/approvers/{$this->approverId}";
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $approverId Approver Id
	 */
	public function __construct(
		protected string $signatureRequestId,
		protected string $approverId,
	) {
	}
}
