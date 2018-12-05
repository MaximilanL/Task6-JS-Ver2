<?php

$autos=["BMW", "Mercedes", "Audi", "Volkswagen", "Peugeot", "Lada", "Geely", "Renault", "Mitsubishi"];

$q = $_REQUEST["q"];
$q--; 

$res=array();
for ($i=0; $i <=$q ; $i++) { 
	$res[]=$autos[$i];
}
echo json_encode($res);
?>