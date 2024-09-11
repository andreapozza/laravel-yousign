<?php

namespace Andreapozza\LaravelYousign\Requests\ElectronicSeal;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-electronic_seal-audit_trail
 *
 * Electronic Seal Audit Trail is only available when the Electronic Seal is "done".
 */
class GetElectronicSealAuditTrail extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/electronic_seals/{$this->electronicSealId}/audit_trails";
	}


	/**
	 * @param string $electronicSealId
	 */
	public function __construct(
		protected string $electronicSealId,
	) {
	}
}
