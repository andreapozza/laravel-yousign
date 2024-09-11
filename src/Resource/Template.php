<?php

namespace Andreapozza\LaravelYousign\Resource;

use Andreapozza\LaravelYousign\Requests\Template\GetTemplates;
use Andreapozza\LaravelYousign\Resource;
use Saloon\Http\Response;

class Template extends Resource
{
	/**
	 * @param int $limit The limit of items count to retrieve.
	 */
	public function getTemplates(?int $limit): Response
	{
		return $this->connector->send(new GetTemplates($limit));
	}
}
