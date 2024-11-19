<?php
$vts = [];
$mobis = [];
$vinas = [];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <label style="display: block;">Nhập danh sách số điện thoại phân cách bằng dấu "," : </label>
        <label style="display: block;">(sẽ phân loại theo đầu số :viettel 09 , mobi 08,vina 07) </label>

        <textarea style="display: block;" name="phones" rows="4" cols="50"></textarea>
        <input style="display: block;" type="submit" value="Phân loại">
    </form>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (empty($_POST['phones'])) {
            echo '<p> dữ liệu không được để trống </p>';
        } else {
            $phonesStr = trim($_POST['phones']);
            $phones = explode(',', $phonesStr);
            foreach ($phones as $phone) {
                $phoneTrimed = trim($phone);
                switch (substr($phoneTrimed, 0, 2)) {
                    case '09':
                        array_push($vts, $phone);
                        break;
                    case '08':
                        array_push($mobis, $phone);
                        break;
                    case '07':
                        array_push($vinas, $phone);
                        break;
                }
            }
            echo '<p> nhà mạng viettel: </p>';
            if (empty($vts)) {
                echo "<span>ko có số nào</span>";
            }
            foreach ($vts as $k => $v) {
                echo "<span>$v ; </span>";
            }
            echo '<p> nhà mạng mobi: </p>';
            if (empty($mobis)) {
                echo "<span>ko có số nào</span>";
            }
            foreach ($mobis as $k => $v) {
                echo "<span>$v ; </span>";
            }
            echo '<p> nhà mạng vina: </p>';
            if (empty($vinas)) {
                echo "<span>ko có số nào</span>";
            }
            foreach ($vinas as $k => $v) {
                echo "<span>$v ; </span>";
            }
        }
    }
    ?>
</body>

</html>