<?php
$url = 'https://covid19.tegalkab.go.id/';
$arrContextOptions=array(
    "ssl"=>array(
        "verify_peer"=>false,
        "verify_peer_name"=>false,
    ),
);  

$teks=file_get_contents($url, false, stream_context_create($arrContextOptions));

function getStringBetwen($teks,$sebelum,$sesudah)
{
    $teks=' '.$teks;
    $ini=strpos($teks,$sebelum);
    if ($ini==0) return '';
    $ini += strlen($sebelum);
    $panjang=strpos($teks,$sesudah,$ini)-$ini;
    return substr($teks,$ini,$panjang);
}

echo getStringBetwen($teks, '<font size="4">','</font>');
