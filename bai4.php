<html>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nhập số cần tính tổng : <input type="text" name="fnumber">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['fnumber'];
        $numerator = 1;
        $result = 0;
        for ($i = 1; $i <= $number; $i++) {
            $total =  $i / (3 * $i);
            $result = $result + $total;
        }
        echo  "Tổng các chữ số là : " . $result;
    }
    ?>

</body>

</html>