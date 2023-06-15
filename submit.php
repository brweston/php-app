<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
</head>
<body>
    <h3>Order Confirmed</h3>
    <p>Your order of <?php echo $_POST["count"]; ?> items with total $<?php echo $_POST["totalprice"] ?> has been recieved.</p>
    <button>OK</button>
</body>
</html>