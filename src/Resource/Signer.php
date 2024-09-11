<?php

namespace Andreapozza\LaravelYousign\Resource;

use Andreapozza\LaravelYousign\Requests\Signer\DeleteSignatureRequestsSignatureRequestIdSignersSignerId;
use Andreapozza\LaravelYousign\Requests\Signer\GetSignatureRequestsSignatureRequestIdSigners;
use Andreapozza\LaravelYousign\Requests\Signer\GetSignersSignersId;
use Andreapozza\LaravelYousign\Requests\Signer\PatchSignatureRequestsSignatureRequestIdSignersSignerId;
use Andreapozza\LaravelYousign\Requests\Signer\PostSignatureRequestsSignatureRequestIdSigners;
use Andreapozza\LaravelYousign\Requests\Signer\PostSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp;
use Andreapozza\LaravelYousign\Requests\Signer\PostSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder;
use Andreapozza\LaravelYousign\Requests\Signer\PostSignatureRequestsSignatureRequestIdSignersSignerIdSign;
use Andreapozza\LaravelYousign\Resource;
use Saloon\Http\Response;

class Signer extends Resource
{
	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function getSignatureRequestsSignatureRequestIdSigners(string $signatureRequestId): Response
	{
		return $this->connector->send(new GetSignatureRequestsSignatureRequestIdSigners($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function postSignatureRequestsSignatureRequestIdSigners(string $signatureRequestId): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdSigners($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $signerId Signer Id
	 */
	public function getSignersSignersId(string $signatureRequestId, string $signerId): Response
	{
		return $this->connector->send(new GetSignersSignersId($signatureRequestId, $signerId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $signerId Signer Id
	 */
	public function deleteSignatureRequestsSignatureRequestIdSignersSignerId(
		string $signatureRequestId,
		string $signerId,
	): Response
	{
		return $this->connector->send(new DeleteSignatureRequestsSignatureRequestIdSignersSignerId($signatureRequestId, $signerId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $signerId Signer Id
	 */
	public function patchSignatureRequestsSignatureRequestIdSignersSignerId(
		string $signatureRequestId,
		string $signerId,
	): Response
	{
		return $this->connector->send(new PatchSignatureRequestsSignatureRequestIdSignersSignerId($signatureRequestId, $signerId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $signerId Signer Id
	 */
	public function postSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp(
		string $signatureRequestId,
		string $signerId,
	): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp($signatureRequestId, $signerId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $signerId Signer Id
	 */
	public function postSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder(
		string $signatureRequestId,
		string $signerId,
	): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder($signatureRequestId, $signerId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $signerId Signer Id
	 */
	public function postSignatureRequestsSignatureRequestIdSignersSignerIdSign(
		string $signatureRequestId,
		string $signerId,
	): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdSignersSignerIdSign($signatureRequestId, $signerId));
	}
}
