<?php

header('Content-Type: application/json');

$conn = mysqli_connect("localhost", "root", "", "relacao");
$result = mysqli_query($conn, "SELECT `produtos`.*, `categorias`.`nome` FROM `produtos`
  INNER JOIN `categorias` ON `produtos`.`categoria_id` = `categorias`.`categoria_id`
  ORDER BY `produtos`.`categoria_id` ASC");

$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}

print_r(json_encode($data));
exit();