<?php

namespace Andreapozza\LaravelYousign\Requests\ElectronicSeal;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * download-electronic-seal-document
 */
class DownloadElectronicSealDocument extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/electronic_seal_documents/{$this->electronicSealDocumentId}/download";
	}


	/**
	 * @param string $electronicSealDocumentId
	 */
	public function __construct(
		protected string $electronicSealDocumentId,
	) {
	}
}
