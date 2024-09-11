<?php

namespace Andreapozza\LaravelYousign\Resource;

use Andreapozza\LaravelYousign\Requests\AuditTrail\GetSignatureRequestsSignatureRequestIdAuditTrailsDownload;
use Andreapozza\LaravelYousign\Requests\AuditTrail\GetSignatureRequestsSignatureRequestIdSignersSignerIdAuditTrails;
use Andreapozza\LaravelYousign\Requests\AuditTrail\GetSignersSignerIdAuditTrailsDownload;
use Andreapozza\LaravelYousign\Resource;
use Saloon\Http\Response;

class AuditTrail extends Resource
{
	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param bool $merge Download all Audit Trails merged as a single PDF file
	 */
	public function getSignatureRequestsSignatureRequestIdAuditTrailsDownload(
		string $signatureRequestId,
		?bool $merge,
	): Response
	{
		return $this->connector->send(new GetSignatureRequestsSignatureRequestIdAuditTrailsDownload($signatureRequestId, $merge));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $signerId Signer Id
	 */
	public function getSignatureRequestsSignatureRequestIdSignersSignerIdAuditTrails(
		string $signatureRequestId,
		string $signerId,
	): Response
	{
		return $this->connector->send(new GetSignatureRequestsSignatureRequestIdSignersSignerIdAuditTrails($signatureRequestId, $signerId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $signerId Signer Id
	 */
	public function getSignersSignerIdAuditTrailsDownload(string $signatureRequestId, string $signerId): Response
	{
		return $this->connector->send(new GetSignersSignerIdAuditTrailsDownload($signatureRequestId, $signerId));
	}
}
