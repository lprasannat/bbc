
<?php
function upordown($url){
    $cs=curl_init($url);
    curl_setopt($cs, CURLOPT_NOBODY, true);
    curl_setopt($cs,CURLOPT_FOLLOWLOCATION,true);
    curl_exec($cs);
    $status=  curl_getinfo($cs,CURLINFO_HTTP_CODE);
    return ($status==200)?true:false;
}
 echo upordown('http://www.google.co.in');
?>
<form action='' method='post'>
    Up or down?<input type='text'>
    <input type='submit'>
</form>