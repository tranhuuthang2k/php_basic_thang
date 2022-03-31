<html>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1> Hình tròn</h1>
        Diện tích: <input type="text" name="area">
        </br>
        Bán kính: <input type="text" name="radius">
        </br>
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $area =  $_POST['area'];
        $radius =  $_POST['radius'];
        $result = pow($radius, 2) * 3.14;
        echo "Diện tích hình tròn là: " . $result;
    }
    ?>

</body>

</html>