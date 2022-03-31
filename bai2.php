<html>

<body>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nhập tháng : <input type="text" name="fmonth">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $month = $_POST['fmonth'];
        switch ($month) {
            case 1:
            case 3:
            case 5:
            case 7:
            case 8:
            case 10:
            case 12:
                echo "Tháng " . $month . " có 31 ngày";
                break;
            case 4:
            case 6:
            case 9:
            case 11:
                echo "Tháng " . $month . " có 30 ngày";
                break;
            case 2:
                echo "Tháng" . $month . " có 28 hoặc 29 ngày";
                break;
            default:
                echo "Tháng " . $month . " không hợp lệ";
        }
    }
    ?>

</body>

</html>