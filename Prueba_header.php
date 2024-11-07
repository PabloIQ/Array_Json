<?php
header('Content-type: application/json');

$lst = array("peon" => 1, "alfil" => 3, "caballo" => 3);

$json_response = json_encode($lst);

echo $json_response;

?>