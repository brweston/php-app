<?php
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $db_name = "items_db";

    // Create connection
    $db = new mysqli($servername, $username, $password, $db_name);

    // Check connection
    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }
    $q = "SELECT * FROM items";
    $res = mysqli_query($db, $q);
    $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);


?>
<html>
    <head>
        <title>PHP Test</title>
        <style>
            #menu, .contents {
                width: 60%;
                margin: auto;
            }
            .contents {
                height: 90%;
                display: flex;
                flex-wrap: wrap;
                flex-direction: row;
                justify-content: space-between;
                align-items: flex-start;
            }
            #menu {
                height: 7%;
                background-color: #ccc;
                border-radius: 5px;
            }
            .item {
                box-sizing: border-box;
                background-color: #eee;
                margin: 10px 0;
                width: 30%;
                height: auto;
                border-radius: 5px;
                text-align: center;
                padding: 10px;
            }
            .title {
                font-size: 1.25em;
                font-weight: bold;
            }
            .price {
                float: left;
            }
            .price::before {
                content: '$';
            }
            input[type="button"] {
                float: right;
                bottom: 0;
            }
            .item img {
                height: 100px;
                width: 100px;
            }
            #menu img {
                height: 20px;
                width: 20px;
            }
            #count {
                font-size: 1.25em;
            }
        </style>
        <script>
            var count = 0;
            function addItem() {
                const form = document.forms.mainform;

                //find item element in form
                const itemEl = window.event.target.closest(".item");

                //extract and add to total price
                const priceToAdd = parseInt(itemEl.querySelector(".price").innerText);
                const newTotalPrice = parseInt(form.totalprice.value) + priceToAdd;
                form.totalprice.value = newTotalPrice;


                //increase number of items
                const countEl = form.count;
                const countValue = parseInt(countEl.value) + 1;
                countEl.value = countValue;
            }
            
        </script>
    </head>
    <body>
        <form name="mainform" action="submit.php" method="post">
            <div id="menu">
                <input name="count" value="0">
                <input type="hidden" name="totalprice" value="0">
                <img src="cart.jpeg">
            </div>
            <?php
                $contents = "";
                foreach ($rows as $r) {
                    $name = $r["name"];
                    $price = rand(50, 250);
                    $contents .= "
                        <div class=\"item\">
                            <img src=\"camera.jpeg\">
                            <div class=\"title\">$name</div>
                            <div class=\"info\">
                                <div class=\"price\">$price</div>
                                <input type=\"button\" onclick=\"addItem();\" value=\"Add\">
                            </div>
                        </div>
                    ";
                }
                echo "<div class=\"contents\">$contents</div>";
            ?>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>
