<html>

<body>
    <form method="post" action="">
        <h1>Mua hoa</h1>
        ID hoa: <input type="text" name="id">
        </br>
        Tên Hoa: <input type="text" name="name">
        </br>
        Số lượng: <input type="text" name="quantity">
        </br>
        Đơn giá: <input type="text" name="price">
        </br>
        <input type="submit">
    </form>

    <?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_SESSION["carts"][$_POST["id"]]["id"] == $_POST["id"]) {
            $_SESSION["carts"][$_POST["id"]]["quantity"] += $_POST["quantity"];
        } else {
            $_SESSION['carts'][$_POST["id"]] = array("id" => $_POST["id"], "name" => $_POST["name"], "quantity" => $_POST["quantity"], "price" => $_POST["price"]);
        }
        if (isset($_SESSION["carts"])) {
            // session_destroy();
            // print_r($_SESSION["carts"]);
            header("Location:giohoa.php");
        }
    }
    ?>

</body>

</html>