<?php

namespace Andreapozza\LaravelYousign\Resource;

use Andreapozza\LaravelYousign\Requests\SignerDocumentRequest\DeleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestId;
use Andreapozza\LaravelYousign\Requests\SignerDocumentRequest\DeleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId;
use Andreapozza\LaravelYousign\Requests\SignerDocumentRequest\DeleteSignatureRequestsSignatureRequestIdSignersSignerIdDocuments;
use Andreapozza\LaravelYousign\Requests\SignerDocumentRequest\GetSignatureRequestsSignatureRequestIdSignersSignerIdDocuments;
use Andreapozza\LaravelYousign\Requests\SignerDocumentRequest\GetSignatureRequestsSignatureRequestIdSignersSignerIdDocumentsSignerDocumentId;
use Andreapozza\LaravelYousign\Requests\SignerDocumentRequest\PostSignatureRequestsSignatureRequestIdDocumentRequests;
use Andreapozza\LaravelYousign\Requests\SignerDocumentRequest\PutSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId;
use Andreapozza\LaravelYousign\Resource;
use Saloon\Http\Response;

class SignerDocumentRequest extends Resource
{
	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function postSignatureRequestsSignatureRequestIdDocumentRequests(string $signatureRequestId): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdDocumentRequests($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $documentRequestId Signer Document Request Id
	 */
	public function deleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestId(
		string $signatureRequestId,
		string $documentRequestId,
	): Response
	{
		return $this->connector->send(new DeleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestId($signatureRequestId, $documentRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $documentRequestId Signer Document Request Id
	 * @param string $signerId Signer Id
	 */
	public function putSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId(
		string $signatureRequestId,
		string $documentRequestId,
		string $signerId,
	): Response
	{
		return $this->connector->send(new PutSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId($signatureRequestId, $documentRequestId, $signerId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $documentRequestId Signer Document Request Id
	 * @param string $signerId Signer Id
	 */
	public function deleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId(
		string $signatureRequestId,
		string $documentRequestId,
		string $signerId,
	): Response
	{
		return $this->connector->send(new DeleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId($signatureRequestId, $documentRequestId, $signerId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $signerId Signer Id
	 */
	public function getSignatureRequestsSignatureRequestIdSignersSignerIdDocuments(
		string $signatureRequestId,
		string $signerId,
	): Response
	{
		return $this->connector->send(new GetSignatureRequestsSignatureRequestIdSignersSignerIdDocuments($signatureRequestId, $signerId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $signerId Signer Id
	 */
	public function deleteSignatureRequestsSignatureRequestIdSignersSignerIdDocuments(
		string $signatureRequestId,
		string $signerId,
	): Response
	{
		return $this->connector->send(new DeleteSignatureRequestsSignatureRequestIdSignersSignerIdDocuments($signatureRequestId, $signerId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $signerId Signer Id
	 * @param string $signerDocumentId Signer Document Id
	 */
	public function getSignatureRequestsSignatureRequestIdSignersSignerIdDocumentsSignerDocumentId(
		string $signatureRequestId,
		string $signerId,
		string $signerDocumentId,
	): Response
	{
		return $this->connector->send(new GetSignatureRequestsSignatureRequestIdSignersSignerIdDocumentsSignerDocumentId($signatureRequestId, $signerId, $signerDocumentId));
	}
}
