<?php
function __autoload($name){
    include_once("models/$name.class.php");
}
$html = new Html();
$html->setContent(include("controllers/writer/writer.php"));
$html->addCss("<link rel='stylesheet' href='css/screen.css' type='text/css' media='screen'/>");
$html->addScript("<script src='js/editor.js'></script>");
$html->addScript('<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>');
$html->addScript('<script type="text/javascript" src="/js/moo-clientcide-1.3.js?update_06_12_2015_2"></script>');
print(include("views/page.php"));