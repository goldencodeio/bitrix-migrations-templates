<?php

namespace goldencode\Bitrix\Migrations;

use Arrilot\BitrixMigrations\TemplatesCollection as ArrilotTemplatesCollection;

class TemplatesCollection extends ArrilotTemplatesCollection
{
	public function __construct()
	{
		parent::__construct();
		$this->dir = __DIR__ . '/../templates';
	}

	public function registerBasicTemplates()
	{
		parent::registerBasicTemplates();
		$this->registerCustomTemplates();
	}

	private function registerCustomTemplates()
	{
		$templates = [
			[
				'name' => 'add_app_config',
				'path' => $this->dir . '/custom/add_app_config.template',
				'description' => 'Add AppConfig Iblock',
			]
		];

		foreach ($templates as $template)
			$this->registerTemplate($template);
	}
}
