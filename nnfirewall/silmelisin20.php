<?php
function sifrele($sifre){
$sifrele = md5($sifre);
$degis = str_replace("1", "z", $sifrele);
$degis2 = str_replace("2", "a", $degis);
$degis3 = str_replace("3", "o", $degis2);
$degis4 = str_replace("4", "m", $degis3);
$degis5 = str_replace("5", "f", $degis4);
$degis6 = str_replace("6", "n", $degis5);
$degis7 = str_replace("7", "z", $degis6);
$degis8 = str_replace("8", "q", $degis7);
$degis9 = str_replace("9", "l", $degis8);
$degis0 = str_replace("0", "e", $degis9);
return $degis0;
}

$tarih = date('d.m.Y');
$sifrelenew = sifrele($date);
unlink("".$sifrelenew.".txt");
unlink("".$sifrelenew."_f.txt");
?>
