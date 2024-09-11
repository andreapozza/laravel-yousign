<?php

namespace Andreapozza\LaravelYousign\Resource;

use Andreapozza\LaravelYousign\Requests\Archive\GetArchivesArchivedFileIdDownload;
use Andreapozza\LaravelYousign\Requests\Archive\PostArchives;
use Andreapozza\LaravelYousign\Resource;
use Saloon\Http\Response;

class Archive extends Resource
{
	public function postArchives(): Response
	{
		return $this->connector->send(new PostArchives());
	}


	/**
	 * @param string $archivedFileId ArchivedFileId
	 */
	public function getArchivesArchivedFileIdDownload(string $archivedFileId): Response
	{
		return $this->connector->send(new GetArchivesArchivedFileIdDownload($archivedFileId));
	}
}
