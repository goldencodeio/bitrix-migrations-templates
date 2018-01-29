<?php

namespace goldencode\Bitrix\Migrations;

use Arrilot\BitrixMigrations\TemplatesCollection;

class CustomTemplatesCollection extends TemplatesCollection
{
	public function __construct()
	{
		parent::__construct();
		$this->dir = __DIR__ . '/../templates';
	}

	public function registerBasicTemplates()
	{
		parent::registerBasicTemplates();
		// add register custom templates
	}
}
