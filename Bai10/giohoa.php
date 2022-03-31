<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table>
        <tr>
            <th>ID</th>
            <th>Tên</th>
            <th>SỐ lượng</th>
            <th>Giá tiền</th>
            <th>Tổng TIền</th>
        </tr>
        <?php
        session_start();


        if (isset($_SESSION['carts'])) {
            foreach ($_SESSION['carts'] as $key => $item) {
                echo '<tr>';
                echo '<td>';

                echo htmlspecialchars($_SESSION['carts'][$key]["id"]);;
                echo '</td>';
                echo '<td>';
                echo htmlspecialchars($_SESSION['carts'][$key]["name"]);
                echo '<td>';
                echo htmlspecialchars($_SESSION['carts'][$key]["quantity"]);
                echo '</td>';
                echo '<td>';

                echo htmlspecialchars($_SESSION['carts'][$key]["price"]);;
                echo '</td>';
                echo '<td>';

                echo htmlspecialchars($_SESSION['carts'][$key]["price"] * $_SESSION['carts'][$key]["quantity"]);;
                echo '</td>';
                echo '</td>';
                echo '</tr>';
            }
            print_r($_SESSION["carts"]);

        }
        ?>
        

    </table>
</body>

</html>