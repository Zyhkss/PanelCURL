<?php
$subjek = $_POST['subjek'];
$pesan = $_POST['pesan'];

include 'panel/data.php';
$sender = 'From: '.$nik.'<'.$sender.'>';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";


$read = file_get_contents('panel/data.json');
$json = json_decode($read,true);

for($i=0;$i<=count($json) - 1;$i++)
{
mail($json[$i]['email'], $subjek, $pesan, $headers);
}
?>