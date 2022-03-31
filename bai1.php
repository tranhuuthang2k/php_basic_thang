<html>

<body>

  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Nhập số tiền : <input type="text" name="fprice">
    <input type="submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $price = $_POST['fprice'];
    if (empty($price)) {
      echo "Số tiền không được để trống và phải lớn hơn 0";
    } else if ($price >= 200  && $price <= 300) {
      echo "Bạn được khuyến mãi: 20%";
    } else if ($price > 300) {
      echo "Bạn được khuyến mãi: 30%";
    } else {
      echo "Bạn không có khuyến mãi";
    }
  }
  ?>

</body>

</html>