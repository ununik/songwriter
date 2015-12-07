<?php
class Editor extends Connection
{
	public function getAllAkords(){
		$db = parent::connect();
		$result = $db->prepare("SELECT * FROM `akord` ORDER BY `number` ASC");
		$result->execute(array());
		$akordy = $result->fetchAll();
		return $akordy;
	}
}