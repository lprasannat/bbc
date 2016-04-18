<?php
if (isset($_GET['name'])) {
	$name = $_GET['name'];
	switch($name) {
		case 'lakshmi':
			echo 'lakshmi';
		break;
		case 'prasanna';
			echo 'prasanna';
		break;
	}
} else {
	if (isset($_GET['age'])) {
		$age = $_GET['age'];
		echo 'You are', $age, ' years old?';
		if ($age < 18) {
			$underage = true;
		}
	//}
}
?>
