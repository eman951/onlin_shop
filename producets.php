<!DOCTYPE html>
<html lang="en">
<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> products </title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <center>
    <h3> all produect avalibale </h3>
</center>

<?php
include ('config.php');
$result = mysqli_query ($con, "SELECT * FROM prod ");
while ($row = mysqli_fetch_array($result)){
    echo "
    <center>
    <main>
<div class='card' style='width: 18rem;'>
  <img src='$row [image]' class='card-img-top'>
  <div class='card-body'>
    <h5 class='card-title'>$row [name]</h5>
    <p class='card-text'>$row [price]</p>
    <a href= 'delete.php? id=$row [id]' class='btn btn-danger'>delete product</a>
    <a href='delete.php? id=$row [id]' class='btn btn-primary>eidte product</a>
  </div>
</div>
</main>
    </center>
    ";
}
?>



</body>
</html