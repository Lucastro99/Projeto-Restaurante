<?php

header('Content-Type: application/json');

include "config.php";
$result = mysqli_query($conn, "SELECT * FROM produtos ORDER BY id DESC LIMIT 3");

$data = array();
while ($row = mysqli_fetch_object($result))
{
    array_push($data, $row);
}

print_r(json_encode($data));
