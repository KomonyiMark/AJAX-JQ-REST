<?php

require './MySqlDB.php';

parse_str(file_get_contents('php://input'), $adatom);
print_r($adatom);


$mySql = new MySqlDB();
$id = $adatom[ID];
$nev = $adatom[nev];
$tel = $adatom[tel];
$kep = $adatom[kep];

$updatestring = "id='" . $id . "',nev='" . $nev . "',tel='" . $tel . "',kep='" . $kep . "'";
$mySql->frissit("telefonkonyvem", $updatestring, "ID=" .$id);
