<?php

namespace Andreapozza\LaravelYousign\Requests\Field;

use DateTime;
use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * update-signature_requests-signatureRequestId-documents-documentId-fields-fieldId
 *
 * Updates a given Field. Any parameters not provided are left unchanged.
 */
class UpdateSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId extends Request implements HasBody
{
	use HasJsonBody;

	protected Method $method = Method::PATCH;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/documents/{$this->documentId}/fields/{$this->fieldId}";
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $documentId Document Id
	 * @param string $fieldId Field Id
	 */
	public function __construct(
		protected string $signatureRequestId,
		protected string $documentId,
		protected string $fieldId,
	) {
	}
}
