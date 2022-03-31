<html>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $original_text =  $_POST['original_text'];
        $word_text =  $_POST['word_text'];
        $relace_text = $_POST['relace_text'];
        $result = str_replace($word_text, $relace_text, $original_text);
    }
    ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <h1> Thay thế chuỗi</h1>
        Đoạn văn bản gốc: <input type="text" name="original_text" value="<?php echo $original_text ?>">
        </br>
        Từ gốc: <input type="text" name="word_text" value="<?php echo $word_text ?>">
        </br>
        Thay thế bằng: <input type="text" name="relace_text" value="<?php echo $relace_text ?>">
        </br>
        <input type="submit" value="thực hiện">
        <textarea name="" id="" cols="30" rows="10"><?php echo  $result; ?></textarea>
    </form>
</body>
</html>