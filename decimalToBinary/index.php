<?php
class Stack
{
    private $stack = [];

    public function __construct() {}

    public function push($value)
    {
        if (empty($this->stack)) {
            array_unshift($this->stack, $value);
        } else {
            array_unshift($this->stack, $value);
        }
    }
    public function pop()
    {
        if (empty($this->stack)) {
            throw new RunTimeException('Stack is empty!');
        } else {
            return array_shift($this->stack);
        }
    }
    public function top()
    {
        if (empty($this->stack)) {
            throw new RunTimeException('Stack is empty!');
        } else {
            return $this->stack[0];
        }
    }
    public function  isEmpty()
    {
        if (empty($this->stack)) {
            return true;
        } else {
            return false;
        }
    }
}
function isnguyenduong($number)
{
    return is_int((int)$number) && (int)$number > 0;
}
function chuyensangbinary($number)
{

    $nhiPhan = new Stack();
    $text = '';

    while ($number > 0) {
        $nhiPhan->push($number % 2);
        $number = (int)($number / 2);
    }
    while (!$nhiPhan->isEmpty()) {
        $text =  $text  . $nhiPhan->pop();
    }
    return $text;
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
    <form action="" method="post">
        <label for="">Nhập vào số thập phân:</label>
        <input type="number" name="decimalNum">
        <input type="submit">

    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST") {

        if (isnguyenduong($_POST["decimalNum"])) {
            echo "chuỗi số thập phân của " . $_POST["decimalNum"] . " là :" . chuyensangbinary($_POST["decimalNum"]);
        } else {
            echo "<p> nhập số nguyên dương >0  </p>";
        }
    }
    ?>
</body>

</html>