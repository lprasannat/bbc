<?php
// echo 'hi';
require 'nbbc/nbbc.php';
$bb=new bbcode();
$output='[b]hai[/b]';
echo $bb->Parse($output);
?>