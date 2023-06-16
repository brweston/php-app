<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Item</title>
</head>
<body>
    <form action="add_item.php" method="post" >
        <h3>Create a New Item</h3>
        <label for="name">Item Name</label><input type="text" name="name"><br>
        <label for="price">Item Price</label><input type="number" name="price">
        <button type="submit">Submit</button>
    </form>
</body>
</html>