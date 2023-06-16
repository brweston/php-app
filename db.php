<?php

function connect() {
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $db_name = "items_db";
    $db = new mysqli($servername, $username, $password, $db_name);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    return $db;
}

//Get all rows from table "items" in "items_db"
function getAllItems() {
    $db = connect();
    $q = "SELECT * FROM items";
    $res = mysqli_query($db, $q);
    $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
    mysqli_close($db);
    return $rows;
}

//Add item to table "items"
function addItem($name, $price) {
    $db = connect();

    $q = "INSERT INTO items (name, price) VALUES('$name', $price)";
    $res = mysqli_query($db, $q);
    echo "Added item $name with $$price to db";
    mysqli_close($db);
}
?>