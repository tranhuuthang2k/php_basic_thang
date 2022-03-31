<html>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nhập một chuỗi : <input type="text" name="fnumber">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number =  $_POST['fnumber'];
        $number_a =  str_replace(',', '', $number);
        echo min(str_split($number_a));
    }
    ?>

</body>

</html>