<?php

//menemukan angka terbesar pada deret bilangan dalam array
$nomor = array(11, 6, 31, 201, 99, 861, 1, 7, 14, 79);
$panjang = count($nomor);
$maks = $nomor[0];

for($i=0;$i<$panjang;$i++)
{
    if($nomor[$i]>$maks)
    {
        $maks = $nomor[$i];
    }
}

Echo "Angka terbesar adalah <b>" . $maks . "</b>";
?>