<?php

namespace Andreapozza\LaravelYousign;

use Saloon\Http\Connector;
use Saloon\RateLimitPlugin\Limit;
use Andreapozza\LaravelYousign\Resource\User;
use Andreapozza\LaravelYousign\Resource\Field;
use Andreapozza\LaravelYousign\Resource\Signer;
use Andreapozza\LaravelYousign\Resource\Archive;
use Andreapozza\LaravelYousign\Resource\Contact;
use Andreapozza\LaravelYousign\Resource\Webhook;
use Andreapozza\LaravelYousign\Resource\Approver;
use Andreapozza\LaravelYousign\Resource\Document;
use Andreapozza\LaravelYousign\Resource\Follower;
use Andreapozza\LaravelYousign\Resource\Metadata;
use Andreapozza\LaravelYousign\Resource\Template;
use Andreapozza\LaravelYousign\Resource\Workspace;
use Andreapozza\LaravelYousign\Resource\AuditTrail;
use Andreapozza\LaravelYousign\Resource\Consumption;
use Andreapozza\LaravelYousign\Resource\ElectronicSeal;
use Andreapozza\LaravelYousign\Resource\CustomExperience;
use Andreapozza\LaravelYousign\Resource\SignatureRequest;
use Andreapozza\LaravelYousign\Resource\SignerDocumentRequest;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\RateLimitPlugin\Contracts\RateLimitStore;
use Saloon\RateLimitPlugin\Stores\MemoryStore;
use Saloon\RateLimitPlugin\Traits\HasRateLimits;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use Saloon\PaginationPlugin\CursorPaginator;

/**
 * Public Api v3
 *
 * Build the best experience of digital signature through your own platform. Increase your conversion rates, leverage your data and reduce your costs with Yousign API.
 */
class YouSignConnector extends Connector implements HasPagination
{
    use HasRateLimits;

    public static $perMinuteLimitThreshold = 1;
    public static $perHourLimitThreshold = 1;
    public static $resolveLimits;

	public function resolveBaseUrl(): string
	{
		return config('yousign.mode') === 'production' ? 'https://api.yousign.app/v3' : 'https://api-sandbox.yousign.app/v3';
	}

    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator(config('yousign.token'));
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
        ];
    }

    protected function resolveLimits(): array
    {
        if (isset(self::$resolveLimits) && is_array(self::$resolveLimits)) {
            return self::$resolveLimits;
        }

        $per_minute_limit = config('yousign.mode') === 'production' ? 60 : 30;
        $per_hour_limit = config('yousign.mode') === 'production' ? 1200 : 200;
        return [
            Limit::allow($per_minute_limit, self::$perMinuteLimitThreshold)->everyMinute()->sleep(),
            Limit::allow($per_hour_limit, self::$perHourLimitThreshold)->everyHour(),
        ];
    }

    public function paginate(Request $request): CursorPaginator
    {
        return new class(connector: $this, request: $request) extends CursorPaginator
        {
            protected function getNextCursor(Response $response): int|string
            {
                return $response->json('meta.next_cursor');
            }

            protected function isLastPage(Response $response): bool
            {
                return is_null($response->json('meta.next_cursor'));
            }

            protected function getPageItems(Response $response, Request $request): array
            {
                return $response->json('data');
            }
        };
    }

    protected function resolveRateLimitStore(): RateLimitStore
    {
        return new MemoryStore;
    }

	public function approver(): Approver
	{
		return new Approver($this);
	}


	public function archive(): Archive
	{
		return new Archive($this);
	}


	public function auditTrail(): AuditTrail
	{
		return new AuditTrail($this);
	}


	public function consumption(): Consumption
	{
		return new Consumption($this);
	}


	public function contact(): Contact
	{
		return new Contact($this);
	}


	public function customExperience(): CustomExperience
	{
		return new CustomExperience($this);
	}


	public function document(): Document
	{
		return new Document($this);
	}


	public function electronicSeal(): ElectronicSeal
	{
		return new ElectronicSeal($this);
	}


	public function field(): Field
	{
		return new Field($this);
	}


	public function follower(): Follower
	{
		return new Follower($this);
	}


	public function metadata(): Metadata
	{
		return new Metadata($this);
	}


	public function signatureRequest(): SignatureRequest
	{
		return new SignatureRequest($this);
	}


	public function signer(): Signer
	{
		return new Signer($this);
	}


	public function signerDocumentRequest(): SignerDocumentRequest
	{
		return new SignerDocumentRequest($this);
	}


	public function template(): Template
	{
		return new Template($this);
	}


	public function user(): User
	{
		return new User($this);
	}


	public function webhook(): Webhook
	{
		return new Webhook($this);
	}


	public function workspace(): Workspace
	{
		return new Workspace($this);
	}
}
