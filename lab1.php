<!DOCTYPE html>
<head>
    <title>1-100 Arası Tek Sayılar</title>
    <style>
                body {
            background-color: rgb(32, 33, 36);
            color: rgb(232, 234, 237);
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>

<h1>Tek Sayılar </h1>

<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 1) {
        echo $i . " ";
    }
}
?>

</body>
</html>
