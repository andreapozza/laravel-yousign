<?php

namespace Andreapozza\LaravelYousign\Requests\Signer;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * post-signature_requests-signatureRequestId-signers-signerId-send_otp
 *
 * Send a One-Time Password (OTP) to a given Signer. Use this endpoint only if you use your own signing
 * flow.
 */
class PostSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::POST;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/signers/{$this->signerId}/send_otp";
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
