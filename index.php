<?php
    include 'vendor/autoload.php';
    use import\DBImport;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Регистрация нового пользователя</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New User</title>
</head>
<body>
    <form action="/" method="POST">
        <label for="first_name">First name:</label><br>
        <input type="text" id="first_name" name="first_name"><br>
        <label for="email">email  :</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="age">age :</label><br>
        <input type="text" id="age" name="age"><br>
        <input class="submit" type="submit" value="отправить">
	</form>
</body>
</html>
<?php

$formUsersInBD = new DBImport;
echo $formUsersInBD->dataInsert($_POST);

?>
</body>
</html>


