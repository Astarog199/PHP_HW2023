<?php
        if (!empty($_FILES)) {
            $path = "upload/" . $_FILES['myfile']['name'];
            if (move_uploaded_file($_FILES['myfile']['tmp_name'], $path)) {
                $message = "Файл загружен!";
            }else{
                $message = "Ошибка загрузки";
            }
            header("Location: index.php");
            die();
        }
        

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