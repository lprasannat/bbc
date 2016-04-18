<?php
$Link = mysqli_connect('localhost', 'dbuser', '123', 'lakshmi');
$Query = mysqli_query($Link,"SELECT FirstName FROM UserTable");
//$Result = mysqli_query($Link, $Query);
//$Row = mysqli_fetch_array($Result);
//$Name = $Row['Name'];
//echo $Name;
while($Row=  mysqli_fetch_assoc($Query)){
    echo $Row['FirstName'].'<br>';
}
?>
