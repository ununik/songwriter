<?php
return "
<!doctype>
<html>
    <head>
        <meta charset='utf-8'>
        <meta name='viewport' content='width=device-width; initial-scale=1.0'>
        {$html->getCss()}
         {$html->getScripts()}
    </head>
    <body>
        <div id='content'>
            {$html->getContent()}
        </div>
        <div id='vertical_menu'>{$html->getVerticalMenu()}</div>
    </body>
</html>";