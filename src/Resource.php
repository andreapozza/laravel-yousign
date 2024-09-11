<?php

namespace Andreapozza\LaravelYousign;

use Saloon\Http\Connector;

class Resource
{
	public function __construct(
		protected Connector $connector,
	) {
	}
}
