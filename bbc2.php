<?php
require 'nbbc/nbbc.php';
$bb=new bbcode();

$bb->AddRule('youtube', array(
    'mode'=>BBCODE_MODE_ENHANCED,
    'template'=>'<iframe class="youtube-player" type="text/html" width="640" height="350" src="http://www.youtube.com/embed/{$_content}" frameborder="0"></iframe>',
    'class'=>'block',
    'allow_in'=>null
));
$output='[youtube]v4oN4DuR7YU[/youtube]';
echo $bb->Parse($output);


?>