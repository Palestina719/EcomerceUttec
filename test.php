<?php

include "functions/connect.php";

$id = $_GET["id"];
delete_product($id);

header('location: all-products.php');


?>
