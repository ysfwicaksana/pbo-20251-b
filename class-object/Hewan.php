<?php

//class khusus hewan berkaki 4
class Hewan {

   //atribut atau property
   public $mata;
   public $telinga;
   public $hidung;
   public $kaki = 4; //default value
}

//object
$merpati = new Hewan();
$merpati->kaki = 2;
$merpati->mata = 'bulat'; // set atau assign atau pasang
$merpati->telinga = 'lancip';
$merpati->hidung = 'pesek';

print_r($merpati); // get atau tampil 
