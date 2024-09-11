<?php

namespace Andreapozza\LaravelYousign\Requests\Signer;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signers-signersId
 *
 * Retrieves a given Signer.
 */
class GetSignersSignersId extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/signers/{$this->signerId}";
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
