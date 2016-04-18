<?php
require 'nbbc.php';
$bb=new bbcode();
$bb->setDetectUrls(true);
$normalurl="http://www.google.co.in";
$url="[url=http://www.google.co.in]Google[/url]";
$output=":)";
//$bb->AddRule('php', array(
   // 'simple_start'=>'<pre class="php">',
    //'simple_end'=>'</pre>',
    //'class'=>'block',
    //'allow_in'=>null
//));
/*$output="[php] <?php echo 'some code';?>[/php]";*/
echo $bb->Parse($output)."<br>";
echo $bb->Parse($url)."<br>";
echo $bb->Parse($normalurl)."<br>";

?>