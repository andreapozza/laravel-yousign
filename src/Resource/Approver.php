<?php

namespace Andreapozza\LaravelYousign\Resource;

use Andreapozza\LaravelYousign\Requests\Approver\DeleteSignatureRequestsSignatureRequestIdApproversApproverId;
use Andreapozza\LaravelYousign\Requests\Approver\GetSignatureRequestsSignatureRequestIdApproversApproverId;
use Andreapozza\LaravelYousign\Requests\Approver\PatchSignatureRequestsSignatureRequestIdApproversApproverId;
use Andreapozza\LaravelYousign\Requests\Approver\PostSignatureRequestsSignatureRequestIdApprovers;
use Andreapozza\LaravelYousign\Requests\Approver\PostSignatureRequestsSignatureRequestIdApproversApproverIdSendReminder;
use Andreapozza\LaravelYousign\Resource;
use Saloon\Http\Response;

class Approver extends Resource
{
	/**
	 * @param string $signatureRequestId Signature Request Id
	 */
	public function postSignatureRequestsSignatureRequestIdApprovers(string $signatureRequestId): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdApprovers($signatureRequestId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $approverId Approver Id
	 */
	public function getSignatureRequestsSignatureRequestIdApproversApproverId(
		string $signatureRequestId,
		string $approverId,
	): Response
	{
		return $this->connector->send(new GetSignatureRequestsSignatureRequestIdApproversApproverId($signatureRequestId, $approverId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $approverId Approver Id
	 */
	public function deleteSignatureRequestsSignatureRequestIdApproversApproverId(
		string $signatureRequestId,
		string $approverId,
	): Response
	{
		return $this->connector->send(new DeleteSignatureRequestsSignatureRequestIdApproversApproverId($signatureRequestId, $approverId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $approverId Approver Id
	 */
	public function patchSignatureRequestsSignatureRequestIdApproversApproverId(
		string $signatureRequestId,
		string $approverId,
	): Response
	{
		return $this->connector->send(new PatchSignatureRequestsSignatureRequestIdApproversApproverId($signatureRequestId, $approverId));
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $approverId Approver Id
	 */
	public function postSignatureRequestsSignatureRequestIdApproversApproverIdSendReminder(
		string $signatureRequestId,
		string $approverId,
	): Response
	{
		return $this->connector->send(new PostSignatureRequestsSignatureRequestIdApproversApproverIdSendReminder($signatureRequestId, $approverId));
	}
}
