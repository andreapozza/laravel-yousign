<?php

namespace Andreapozza\LaravelYousign\Resource;

use Andreapozza\LaravelYousign\Requests\SignatureRequest\DeleteSignatureRequestsSignatureRequestId;
use Andreapozza\LaravelYousign\Requests\SignatureRequest\GetSignatureRequests;
use Andreapozza\LaravelYousign\Requests\SignatureRequest\GetSignatureRequestsSignatureRequestId;
use Andreapozza\LaravelYousign\Requests\SignatureRequest\PatchSignatureRequestsSignatureRequestId;
use Andreapozza\LaravelYousign\Requests\SignatureRequest\PostSignatureRequests;
use Andreapozza\LaravelYousign\Requests\SignatureRequest\PostSignatureRequestsSignatureRequestIdActivate;
use Andreapozza\LaravelYousign\Requests\SignatureRequest\PostSignatureRequestsSignatureRequestIdCancel;
use Andreapozza\LaravelYousign\Requests\SignatureRequest\PostSignatureRequestsSignatureRequestIdReactivate;
use Andreapozza\LaravelYousign\Resource;
use Saloon\Http\Response;

class SignatureRequest extends Resource
{
	/**
	 * @param string $status Filter by status
	 * @param int $limit The limit of items count to retrieve.
	 * @param string $externalId Filter by external_id
	 * @param array $source Filter by source
	 * @param string $q Search on name
	 */
	public function list(
		?string $status = null,
		?int $limit = null,
		?string $externalId = null,
		?array $source = null,
		?string $q = null,
	): Response
	{
		return $this->connector->send(new GetSignatureRequests($status, $limit, $externalId, $source, $q));
	}


	public function create(): Response
	{
		return $this->connector->send(new PostSignatureRequests());
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function get(string $signatureRequestId): Response
	{
		return $this->connector->send(new GetSignatureRequestsSignatureRequestId($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param bool $permanentDelete If true it will permanently delete the Signature Request. It will no longer be retrievable.
	 */
	public function delete(
		string $signatureRequestId,
		?bool $permanentDelete,
	): Response
	{
		return $this->connector->send(new DeleteSignatureRequestsSignatureRequestId($signatureRequestId, $permanentDelete));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function patch(string $signatureRequestId): Response
	{
		return $this->connector->send(new PatchSignatureRequestsSignatureRequestId($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function activate(string $signatureRequestId): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdActivate($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function cancel(string $signatureRequestId): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdCancel($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function reactivate(string $signatureRequestId): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdReactivate($signatureRequestId));
	}
}
