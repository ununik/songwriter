<?php
$editor = new Editor();
$html->addVerticalMenu(include "controllers/writer/vertical_menu.php");
return include("views/write/editor.php");