<?php
require 'nbbc/nbbc.php';
$bb=new bbcode();
$bb->AddRule('php', array(
    'simple_start'=>'<pre class="php">',
    'simple_end'=>'</pre>',
    'class'=>'block',
    'allow_in'=>null
));
$output="[php] <?php echo 'some code';?>[/php]";
echo $bb->Parse($output);
?>