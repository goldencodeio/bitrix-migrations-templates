<?php

namespace goldencode\Bitrix\Migrations;

use Arrilot\BitrixMigrations\Exceptions\MigrationException;
use Arrilot\BitrixMigrations\BaseMigrations\BitrixMigration as ArrilotBitrixMigration;
use CIBlock;

class BitrixMigration extends ArrilotBitrixMigration
{
	/**
	 * Add iblock
	 *
	 * @param array $fields iblock fields
	 * @throws MigrationException
	 * @return int
	 */
	protected function addIblock($fields)
	{
		$ib = new CIBlock();
		$iblockId = $ib->add($fields);

		if (!$iblockId)
			throw new MigrationException('Ошибка при добавлении инфоблока '.$ib->LAST_ERROR);

		return $iblockId;
	}
}
