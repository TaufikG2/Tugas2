<?php
require_once("lat4_5a.php");

$s =  new sarjana;
$s->getprogram('mahasiswa')."<br/>";
$s->tugasakhir();

$magister = new magister;
$magister->getprogram('mahasiswa')."<br/>";
$magister->tugasakhir();
