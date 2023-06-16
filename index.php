<?php
    require_once('db.php');

    $rows = getAllItems();
?>
<html>
    <head>
        <title>Store Order App</title>
        <link rel="stylesheet" href="static/index.css">
        <script src="helpers.js"></script>
        <script src="index.js"></script>
    </head>
    <body>
        <form name="mainform" action="submit.php" method="post">
            <div id="menu">
                <input type="text" name="count" value="0" readonly>
                <input type="hidden" name="totalprice" value="0">
                <img src="static/cart.jpeg">
                <input type="button" onclick="redirect(PAGES.CREATE_ITEM);" value="New Item">
            </div>
            <?php
                $contents = "";
                foreach ($rows as $r) {
                    $name = $r["name"];
                    $price = $r["price"];
                    $contents .= "
                        <div class=\"item\">
                            <img src=\"static/camera.jpeg\">
                            <div class=\"title\">$name</div>
                            <div class=\"info\">
                                <div class=\"price\">$price</div>
                                <input type=\"button\" onclick=\"addItem();\" value=\"Add\">
                            </div>
                        </div>
                    ";
                }
                echo "<div class=\"contents\">$contents</div>";
            ?><br>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
