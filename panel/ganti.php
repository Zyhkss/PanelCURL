<?php

$pertama = "<?php \n";
$terakhir = "?>";


$put = fopen("data.php","w") or die("Cannot write to path");
		 fwrite($put,$pertama);
		 fwrite($put,'$nik = "'.$_GET['nick'].'";');
		 fwrite($put,"\n");
		 fwrite($put,'$sender = "'.$_GET['sender'].'";');
		 fwrite($put,"\n");
		 fwrite($put,$terakhir);
		 fclose($put);
echo '200';