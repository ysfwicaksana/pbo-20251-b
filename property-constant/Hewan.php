<?php

class Hewan {

    public string $mata;
    public int $jumlahKaki;

    public const BERNAFAS = "Hewan Bernafas";
}

$kucing = new Hewan();

$kucing->mata = 'bulat';
$kucing->jumlahKaki = 4;
echo $kucing->mata;
echo $kucing->jumlahKaki;
echo $kucing->BERNAFAS;
// echo Hewan::BERNAFAS;

