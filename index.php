<?php
header("Content-Type: application/json");

$data = array();
$data["jmeno"] = "Marek";
$data["prijm"] = "Petr";
$data["roknar"] = 2001;
echo json_encode($data);