<?php

namespace Andreapozza\LaravelYousign\Requests\Field;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-signature_requests-signatureRequestId-documents-documentId-fields
 *
 * Returns a list of Fields for a given Document. You can limit the number of items returned by using
 * filters.
 */
class GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/signature_requests/{$this->signatureRequestId}/documents/{$this->documentId}/fields";
	}


	/**
	 * @param string $signatureRequestId Signature Request Id
	 * @param string $documentId Document ID
	 * @param null|array $types Filter by Field type.
	 * @param null|int $limit The limit of items count to retrieve.
	 */
	public function __construct(
		protected string $signatureRequestId,
		protected string $documentId,
		protected ?array $types = null,
		protected ?int $limit = null,
	) {
	}


	public function defaultQuery(): array
	{
		return array_filter(['types[]' => $this->types, 'limit' => $this->limit]);
	}
}
