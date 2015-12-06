<?php
$content = "EDITOR";
$content .= "<div contentEditable='true' id='editor'></div>";
$content .= 'Non-editable text. Editable is below:
<div id="test" contenteditable="true">Hello, some <b>bold</b> and <i>italic and <b>bold</b></i> text</div>
<div id="caretPos"></div>';

return $content;