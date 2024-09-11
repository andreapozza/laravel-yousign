<?php

namespace Andreapozza\LaravelYousign\Resource;

use Andreapozza\LaravelYousign\Requests\Metadata\DeleteSignatureRequestsSignatureRequestIdMetadata;
use Andreapozza\LaravelYousign\Requests\Metadata\GetSignatureRequestsSignatureRequestIdMetadata;
use Andreapozza\LaravelYousign\Requests\Metadata\PostSignatureRequestsSignatureRequestIdMetadata;
use Andreapozza\LaravelYousign\Requests\Metadata\PutSignatureRequestsSignatureRequestIdMetadata;
use Andreapozza\LaravelYousign\Resource;
use Saloon\Http\Response;

class Metadata extends Resource
{
	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function getSignatureRequestsSignatureRequestIdMetadata(string $signatureRequestId): Response
	{
		return $this->connector->send(new GetSignatureRequestsSignatureRequestIdMetadata($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function putSignatureRequestsSignatureRequestIdMetadata(string $signatureRequestId): Response
	{
		return $this->connector->send(new PutSignatureRequestsSignatureRequestIdMetadata($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function postSignatureRequestsSignatureRequestIdMetadata(string $signatureRequestId): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdMetadata($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function deleteSignatureRequestsSignatureRequestIdMetadata(string $signatureRequestId): Response
	{
		return $this->connector->send(new DeleteSignatureRequestsSignatureRequestIdMetadata($signatureRequestId));
	}
}
