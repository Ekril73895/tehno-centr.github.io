<?php
$spar1 = "127.0.0.1:3306";
$spar2 = "root";
$spar3 = "";
$spar4 = "my_bd";

$ind = mysqli_connect($spar1, $spar2, $spar3, $spar4);
if ($ind == false) {
    echo "ERROR";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (empty($_POST['login'])) {
        echo "Login field is required.";
        exit;
    }

    
    if (empty($_POST['password'])) {
        echo "Password field is required.";
        exit;
    }

   
    $login = mysqli_real_escape_string($ind, $_POST['login']);
    $password = mysqli_real_escape_string($ind, $_POST['password']);

   
    $query = "SELECT * FROM inf WHERE login='$login' AND password='$password'";
    $result = mysqli_query($ind, $query);

    if (!$result) {
        echo "Error executing query: " . mysqli_error($ind);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if (!$row) {
        print_r ("Invalid login or password.");
        exit;
    }

    // Login and password match, perform further actions
    // ...

    mysqli_free_result($result);

    // Redirect to a different page
    header("Location: admin.php");
    exit;
}

mysqli_close($ind);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
</head>
<body>
<h1>Авторизация</h1>
<style>
    .form-container {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f2f2f2;
        border-radius: 5px;
    }

    .form-container .row {
        margin-bottom: 15px;
    }

    .form-container label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .form-container input[type="text"],
    .form-container input[type="password"] {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    .form-container input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    .form-container input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<div class="form-container">
    <form method="POST" action="">
        <div class="row">
            <label for="login">Login:</label>
            <input name="login" id="login" autocomplete="off" type="text">
        </div>
        <div class="row">
            <label for="pass">Password:</label>
            <input name="password" id="password" type="password">
        </div>
        <div class="row">
            <input type="submit" value="Login">
        </div>
    </form>
</div>

</body>
</html>
