<?php
header('Content-type: text/html');
$text = $_POST['text'];
$position = $_POST['position'];
$chord = $_POST['chord'];
$newlinecount = 0;
$numberOfTransition = 0;
$position += 1;

for($i = 1; $i < 18; $i++){
	$akord = $i.'.png';
	$text = str_replace('<span class="wrapper"><img class="akord" src="'.$akord.'"></span>',"$".$i."$" ,$text);	
	$newlinecount2 = substr_count(substr($text, 0, $position),"$".$i."$");
	if($i < 10){
		$newlinecount = $newlinecount + (3 * $newlinecount2);
	} else{
		$newlinecount = $newlinecount + (4 * $newlinecount2);
	}
}
$text = str_replace("<div","\n<div",$text);
$text = str_replace("<br","\n<br",$text);
$text = str_replace("<p","\n<p",$text);
$text = str_replace("&nbsp;","\n",$text);
$text = strip_tags($text);

$newlinecount += substr_count(substr($text, 0, $position),"\n");
$newlinecount += substr_count(substr($text, 0, $position),"ě");
$newlinecount += substr_count(substr($text, 0, $position),"š");
$newlinecount += substr_count(substr($text, 0, $position),"č");
$newlinecount += (substr_count(substr($text, 0, $position),"ř") * 1);
$newlinecount += substr_count(substr($text, 0, $position),"ž");
$newlinecount += substr_count(substr($text, 0, $position),"ý");
$newlinecount += substr_count(substr($text, 0, $position),"á");
$newlinecount += substr_count(substr($text, 0, $position),"í");
$newlinecount += substr_count(substr($text, 0, $position),"é");
$newlinecount += substr_count(substr($text, 0, $position),"ň");
$newlinecount += substr_count(substr($text, 0, $position),"ď");
$newlinecount += substr_count(substr($text, 0, $position),"ť");
$newlinecount += substr_count(substr($text, 0, $position),"ů");
$newlinecount += substr_count(substr($text, 0, $position),"ú");
$position = $position + ($newlinecount * 1);

if($chord != 0){
	if(substr_count(substr($text, $position-4, $position), "$")){
		$position += 4;
	}
	$text = substr($text, 0, $position) . '<span class="wrapper"><img class="akord" src="'.$chord.'.png"></span>|' . substr($text, $position);
}

$text = '<p>' . $text;
$text = str_replace("\n","</p><p>",$text);
$text = str_replace("<p></p>","",$text);

for($i = 1; $i < 18; $i++){
	$akord = $i.'.png';
	$text = str_replace("$".$i."$",'<span class="wrapper"><img class="akord" src="'.$akord.'"></span>',$text);
}
echo $text;