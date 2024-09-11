<?php

namespace Andreapozza\LaravelYousign\Requests\Archive;

use DateTime;
use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * get-archives-archivedFileId-download
 *
 * Download the archived file using the ArchivedFileId.
 */
class GetArchivesArchivedFileIdDownload extends Request
{
	protected Method $method = Method::GET;


	public function resolveEndpoint(): string
	{
		return "/archives/{$this->archivedFileId}/download";
	}


	/**
	 * @param string $archivedFileId ArchivedFileId
	 */
	public function __construct(
		protected string $archivedFileId,
	) {
	}
}
