<?php
$menu = "Menu";
foreach ($editor->getAllAkords() as $akord){
	$menu .= "<button onclick='addChord(\"{$akord['id']}\")'>{$akord['name']}</button>";
}
$menu .= "<button onclick='addChord(\"0\")'>Prevod</button>";
return $menu;