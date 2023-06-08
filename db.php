<?php
$spar1 = "127.0.0.1:3306";
$spar2 = "root";
$spar3 = "";
$spar4 = "my_bd";

$ind = mysqli_connect($spar1, $spar2, $spar3, $spar4);
if ($ind == false){
    echo "ERROR: Database connection failed.";
}

if (empty($_POST['name'])) {
    exit("Поле 'ФИО' не заполнено");
}
if (empty($_POST['Email'])) {
    exit("Поле 'Email' не заполнено");
}
if (empty($_POST['Number'])) {
    exit("Поле 'Номер телефона' не заполнено");
}
if (empty($_POST['message'])) {
    exit("Поле 'Расскажите о проблеме' не заполнено");
}

$name = mysqli_real_escape_string($ind, $_POST['name']);
$email = mysqli_real_escape_string($ind, $_POST['Email']);
$number = mysqli_real_escape_string($ind, $_POST['Number']);
$message = mysqli_real_escape_string($ind, $_POST['message']);

$query = "INSERT INTO products (Name, Email, Number, Message) VALUES ('$name', '$email', '$number', '$message')";

if(mysqli_query($ind, $query)){
    $response = "Ваша заявка принята.";
} else{
    $response = "Error: " . mysqli_error($ind);
}

mysqli_close($ind);

echo $response;
?>

