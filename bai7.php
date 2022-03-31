<html>

<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Nhập số cần tính tổng : <input type="text" name="fnumber">
    <input type="submit">
  </form>

  <?php
  define ( "DEC_10", 10 );
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['fnumber'];
    $total = 0;
    do {
        $total = $total + ($number % DEC_10);
        $number = floor ( $number / DEC_10 );
    } while ( $number > 0 );
    echo  "Tổng các chữ số là : " .$total;
  }
  ?>

</body>

</html>