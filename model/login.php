<?php
    require_once './connection.php';

    $emailOrPhoneNumber = htmlentities($mysqli->escape_string($_POST['emailOrPhoneNumber']));
    $passwordEntered = htmlentities($mysqli->escape_string($_POST['password']));

    $idFioPasswordDB = $mysqli->query("SELECT id_user, fio, password FROM users_all WHERE email = '$emailOrPhoneNumber' OR phone_number = '$emailOrPhoneNumber'");
    $idFioPasswordDB = $idFioPasswordDB->fetch_assoc();
    $idDB = $idFioPasswordDB['id_user'];
    $fioDB = $idFioPasswordDB['fio'];
    $passwordDB = $idFioPasswordDB['password']; 

    if (password_verify($passwordEntered, $passwordDB))
    {
        setcookie('isLogin', $idDB, time() + 60*60*24*7, '/', $_SERVER['SERVER_NAME']); // 7 дней
        echo json_encode(['done']);
    }
    else
    {
        echo json_encode(['Телефонный номер, email или пароль не верны']);
    }
?>