<?php
function checkDauNgoac($text)
{
    $stack = new SplStack();
    $chars = str_split($text);
    foreach ($chars as $char) {
        if ($char == '(') {
            $stack->push($char);
        } else if ($char == ')') {
            if ($stack->isEmpty()) {
                return false;
            }
            $topNgoac = $stack->pop();
            if ($topNgoac !== '(') {

                return false;
            }
        }
    }
    if (!$stack->isEmpty()) {
        return false;
    }
    return true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1> kiêm tra dấu ngoặc</h1>
    <form action="" method="post" method="POST">
        <label for="">nhập vào biểu thức có ngoặc:  </label>
        <input type="text" name="text">
        <input type="submit" value="check">
    </form>
    <?php if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (empty($_POST["text"])) {
            echo "<p> dữ liệu không được để trống </p>";
        } else {
            if (checkDauNgoac(trim($_POST["text"]))) {
                echo '<p> không có lỗi dấu ngoặc </p>';
            } else {
                echo '<p>  có lỗi dấu ngoặc </p>';
            }
        }
    } ?>
</body>

</html>