<?php

namespace Andreapozza\LaravelYousign\Requests\Signer;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-signature_requests-signatureRequestId-signers-signerId-send_reminder
 *
 * Sends a reminder to a given signer to complete their Signature Request.
 * Only possible when the
 * Signature Request status is `ongoing` and the Signer status is `notified`.
 */
class PostSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/signers/{$this->signerId}/send_reminder";
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
