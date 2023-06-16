<?php
require_once('db.php');
    //get data from form
    $name = $_POST["name"];
    $price = $_POST["price"];
    addItem($name, $price);

?>