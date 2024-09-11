<?php

namespace Andreapozza\LaravelYousign\Resource;

use Andreapozza\LaravelYousign\Requests\ElectronicSeal\DeleteElectronicSealImage;
use Andreapozza\LaravelYousign\Requests\ElectronicSeal\DownloadElectronicSealAuditTrail;
use Andreapozza\LaravelYousign\Requests\ElectronicSeal\DownloadElectronicSealDocument;
use Andreapozza\LaravelYousign\Requests\ElectronicSeal\DownloadElectronicSealImage;
use Andreapozza\LaravelYousign\Requests\ElectronicSeal\GetElectronicSeal;
use Andreapozza\LaravelYousign\Requests\ElectronicSeal\GetElectronicSealAuditTrail;
use Andreapozza\LaravelYousign\Requests\ElectronicSeal\ListElectronicSealImages;
use Andreapozza\LaravelYousign\Requests\ElectronicSeal\PostElectronicSeals;
use Andreapozza\LaravelYousign\Requests\ElectronicSeal\UploadElectronicSealDocument;
use Andreapozza\LaravelYousign\Requests\ElectronicSeal\UploadElectronicSealImage;
use Andreapozza\LaravelYousign\Resource;
use Saloon\Http\Response;

class ElectronicSeal extends Resource
{
	public function uploadElectronicSealDocument(): Response
	{
		return $this->connector->send(new UploadElectronicSealDocument());
	}


	/**
	 * @param string $electronicSealDocumentId
	 */
	public function downloadElectronicSealDocument(string $electronicSealDocumentId): Response
	{
		return $this->connector->send(new DownloadElectronicSealDocument($electronicSealDocumentId));
	}


	/**
	 * @param int $limit The limit of items count to retrieve.
	 */
	public function listElectronicSealImages(?int $limit): Response
	{
		return $this->connector->send(new ListElectronicSealImages($limit));
	}


	public function uploadElectronicSealImage(): Response
	{
		return $this->connector->send(new UploadElectronicSealImage());
	}


	/**
	 * @param string $electronicSealImageId
	 */
	public function deleteElectronicSealImage(string $electronicSealImageId): Response
	{
		return $this->connector->send(new DeleteElectronicSealImage($electronicSealImageId));
	}


	/**
	 * @param string $electronicSealImageId
	 */
	public function downloadElectronicSealImage(string $electronicSealImageId): Response
	{
		return $this->connector->send(new DownloadElectronicSealImage($electronicSealImageId));
	}


	public function postElectronicSeals(): Response
	{
		return $this->connector->send(new PostElectronicSeals());
	}


	/**
	 * @param string $electronicSealId
	 */
	public function getElectronicSeal(string $electronicSealId): Response
	{
		return $this->connector->send(new GetElectronicSeal($electronicSealId));
	}


	/**
	 * @param string $electronicSealId
	 */
	public function getElectronicSealAuditTrail(string $electronicSealId): Response
	{
		return $this->connector->send(new GetElectronicSealAuditTrail($electronicSealId));
	}


	/**
	 * @param string $electronicSealId
	 */
	public function downloadElectronicSealAuditTrail(string $electronicSealId): Response
	{
		return $this->connector->send(new DownloadElectronicSealAuditTrail($electronicSealId));
	}
}
