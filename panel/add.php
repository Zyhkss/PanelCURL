<?php

$read = file_get_contents('data.json');
$json = json_decode($read,true);

if($read == null || $read == '' || $read == 'null')
{
	$init = [];
	$write = fopen("data.json","w") or die("Cannot write to path");
			 fwrite($write,json_encode($init));
			 fclose($write);
	exit();
}

$add = array(
	'email' => $_GET['mail']
	);

array_unshift($json,$add);
$put = fopen("data.json","w") or die("Cannot write to path");
		 fwrite($put,json_encode($json));
		 fclose($put);

echo '200';