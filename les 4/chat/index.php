<?php
//  

$message = strip_tags($_GET['message']);

$file = fopen('chat.txt', 'a+'); // путь к файлу


/*
 Функция записывавает $message в файл chat.txt
 $message сообщение в чате
условие проверяет есть лисообщениек в переменной
 */
if (!empty ($message)) {
    fputs($file, $_SERVER['REMOTE_ADDR'] . ": " . $message . PHP_EOL); // \r\n перенос строки
    header ("Location: index.php");
    die();
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
    <form>
        <input type ="text" name = "message" autofocus>
        <input type = "submit" value="Отправить">
    </form>
    
    <p>
        <?php
            while (!feof ($file)) {
               echo fgets ($file) . "<br>";
            }
        ?>
    </p>
</body>
</html>