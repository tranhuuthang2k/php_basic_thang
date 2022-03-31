<html>

<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nhập một số n : <input type="text" name="fnumber">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number =  $_POST['fnumber'];
        $count  =0;
        for ($i = 0; $i <= $number; $i++){
            if ($i % 2 == 0){
              $count = $count + 1;
            }
            
        }
        echo "Tống các số lẽ là : ". $count;
    }
    ?>

</body>

</html>