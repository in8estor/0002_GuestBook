<?php

//phpinfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">
        <p>
            <label for="name">Введите ваше имя:</label><br>
            <input type="text" name="name" id="name">
        </p>
        <p>
            <label for="e-mail">Введите e-mail:</label><br>
            <input type="e-mail" name="e-mail" id="e-mail">
        </p>
        <button type="submit">Отправить</button>
    </form>

</body>
</html>
