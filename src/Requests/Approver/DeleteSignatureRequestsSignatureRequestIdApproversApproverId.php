<?php

namespace Andreapozza\LaravelYousign\Requests\Approver;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-signature_requests-signatureRequestId-approvers-approverId
 *
 * Deletes a given Approver from a Signature Request.
 */
class DeleteSignatureRequestsSignatureRequestIdApproversApproverId extends Request
{
	protected Method $method = Method::DELETE;


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
