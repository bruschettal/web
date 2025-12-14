<!DOCTYPE html>
<head>
    <title>Tablo</title>
    <style>
        table {
            border-collapse: collapse;
        }
        td {
            border: 1px solid rgb(232, 234, 237);;
            padding: 10px;
            text-align: center;
            width: 50px;
            height: 30px;
        }

        body {
            background-color: rgb(32, 33, 36);
            color: rgb(232, 234, 237);
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>

<h2>Tablo Oluşturucu</h2>

<form method="post">
    Satır Sayısı: <input type="number" name="satir" required><br><br>
    Sütun Sayısı: <input type="number" name="sutun" required><br><br>
    <input type="submit" value="Tablo Oluştur">
</form>

<br>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $satir = $_POST['satir'];
    $sutun = $_POST['sutun'];

    echo "<h3>Oluşturulan Tablo ($satir x $sutun)</h3>";

    echo "<table>";

    for ($i = 0; $i < $satir; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $sutun; $j++) {
            $random = rand(1, 100);
            echo "<td>$random</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>
