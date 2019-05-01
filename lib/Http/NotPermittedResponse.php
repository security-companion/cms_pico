<?php

declare(strict_types=1);

namespace OCA\CMSPico\Http;

use OCA\CMSPico\AppInfo\Application;
use OCP\AppFramework\Http;
use OCP\AppFramework\Http\TemplateResponse;

class NotPermittedResponse extends TemplateResponse
{
	/**
	 * NotPermittedResponse constructor.
	 *
	 * @param string|null $message
	 */
	public function __construct(string $message = null)
	{
		parent::__construct(Application::APP_NAME, '403', [ 'message' => $message ], 'guest');
		$this->setStatus(Http::STATUS_FORBIDDEN);
	}
}
