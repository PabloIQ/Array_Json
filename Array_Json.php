<?php
echo "Hola Mundo";

$list = array("nombre" => "Isabel", "edad" => "32", "admin" => true, "contacto" => array());

print_r($list);
echo "<br>";

$json_list = json_encode($list);
echo "<br>";

echo $json_list;
?>