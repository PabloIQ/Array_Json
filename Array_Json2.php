<?php

$list = array();
$list["nombre"] = "Isabel";
$list["edad"] = "36";

print_r($list);

$json_list = json_encode($list);
echo "<br>";

echo $json_list;

?>