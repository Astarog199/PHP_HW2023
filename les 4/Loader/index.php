<?php
$messages = [
    'ok' => 'Файл загружен',
    'error' => 'Ошибка загрузки',
];

    if (!empty($_FILES)) {
        $path = "upload/" . $_FILES['myfile']['name'];

        // проверка на безопасность

        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $path)) {
        $message = "ok";
         } else {
            $message = "error";
        }
        header("Location: index.php?status=$message");
        die();
    }
    $message = $messages[$_GET['status']];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?=$message?>

<form method="post" enctype = "multipart/form-data">
    <input type="file" name = "myfile">
    <input type="submit" value = "Загрузить">
</form>

</body>
</html