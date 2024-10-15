<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm Tra Số Chẵn Lẻ</title>
</head>
<body>
    <h1>Kiểm Tra Số Chẵn Lẻ</h1>
    <form action="" method="POST">
        <input type="number" name="hs1" placeholder="Nhập hệ số A" required>
        <button type="submit">Kiểm tra</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $hs1 = $_POST['hs1'];

            // Hàm kiểm tra số chẵn lẻ
            function check($a) {
                if ($a % 2 == 0){
                    echo "<h3>A là số chẵn</h3>";
                } else {
                    echo "<h3>A là số lẻ</h3>";
                }
            }
            // Gọi hàm để kiểm tra
            check($hs1);
        }
    ?>
</body>
</html>
