<?php
$read = file_get_contents('data.json');
$json = json_decode($read,true);

unset($json[$_GET['keys']]);
$put = fopen("data.json","w") or die("Cannot write to path");
		 fwrite($put,json_encode(array_values($json)));
		 fclose($put);
echo '200';