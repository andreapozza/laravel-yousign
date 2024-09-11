<?php

namespace Andreapozza\LaravelYousign\Requests\Approver;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-signature_requests-signatureRequestId-approvers-approverId-send_reminder
 *
 * Sends a reminder to a given Approver to review their Signature Request.
 * Only possible when the
 * Signature Request status is `approval` and the Approver status is `notified`.
 */
class PostSignatureRequestsSignatureRequestIdApproversApproverIdSendReminder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/approvers/{$this->approverId}/send_reminder";
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
