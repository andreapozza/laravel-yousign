<?php

namespace Andreapozza\LaravelYousign\Requests\SignatureRequest;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * delete-signature_requests-signatureRequestId
 *
 * Deletes a given Signature Request, not possible if the Signature Request is in `approval` and
 * `ongoing` status.
 */
class DeleteSignatureRequestsSignatureRequestId extends Request
{
	protected Method $method = Method::DELETE;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}";
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param null|bool $permanentDelete If true it will permanently delete the Signature Request. It will no longer be retrievable.
	 */
	public function __construct(
		protected string $signatureRequestId,
		protected ?bool $permanentDelete = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['permanent_delete' => $this->permanentDelete]);
	}
}
