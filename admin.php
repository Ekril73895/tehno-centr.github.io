<?php
$spar1 = "localhost";
$spar2 = "root";
$spar3 = "";
$spar4 = "my_bd";

$ind = mysqli_connect($spar1, $spar2, $spar3, $spar4);
if ($ind == false){
    echo "ERROR";
}

// Establish the database connection
$conn = mysqli_connect("localhost", "root", "", "my_bd");
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    $query = "DELETE FROM `products` WHERE Email='$id'";
   
    mysqli_query($conn, $query) or die(mysqli_error($conn));
}

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// Fetch data from the database
$query = "SELECT * FROM `products`";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Error executing query: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style2.css">
  <title>Базовая разметка HTML</title>
</head>
<body>
    
    <style>
     
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      padding: 20px;
    }
    
    .container {
      max-width: 960px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
      text-align: center;
      margin-bottom: 20px;
    }
    
    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }
    
    th, td {
      padding: 10px;
      text-align: left;
    }
    
    th {
      background-color: #f2f2f2;
    }
    
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    
    .delete-button {
      display: inline-block;
      padding: 8px 16px;
      background-color: #ff5f5f;
      color: #fff;
      text-decoration: none;
      border-radius: 4px;
      transition: background-color 0.3s;
    }
  </style>

    
    
    
    
    
    
    

  <section>
        <div class="container">
    <h1>Админка Техподдержка Техно-Центр</h1>
      </div>
    <?php if (mysqli_num_rows($result) > 0) { ?>
      <table>
        <tr>
          <th>Отправитель</th>
          <th>Адрес электронной почты</th>
          <th>Номер телефона</th>
          <th>Описание</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
            <td><?php echo $row['Name']; ?></td>
            <td><?php echo $row['Email']; ?></td>
            <td><?php echo $row['Number']; ?></td>
            <td><?php echo $row['Message']; ?></td>
              <td><a href="?del=<?php echo $row['Email']; ?>" class="delete-button">Delete</a></td>
          </tr>
        <?php } ?>
      </table>
    <?php } else { ?>
      <p>No data found.</p>
    <?php } ?>
  </section>

  <footer>
    <!-- Footer content goes here -->
  </footer>
</body>
</html>