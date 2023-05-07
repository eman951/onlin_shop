<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comme:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel ="stylesheet" href="index.css">
</head>
<body>
    <?php
    include('config.php');
    $ID=$_GET['id'];
    $up = mysqli_query($con,"select * from prod where id =$ID");
    $data = mysqli_fetch_array($up);
    ?>
    <center>
        <div class="main">
            <form action="up.php" method="post" enctype="multipart/form-data">>
                <h2>update product</h2>
             <input type="test" name= 'id'  value='<?php echo $data['id']?>'>
             <br>
             <input type="test" name= 'name'>   value='<?php echo $data['name']?>'>
                <br> 
                <input type="test" name= 'price'>  value='<?php echo $data['price']?>'>
                <br>
                <input type="file" id = "file" name ='image' style ='display:none;'>
                <label for ="file">upload image </label>
                <button name ='update'  type='submit'> upload product</button>
                <br><br>
                <a href="products.php"> show products</a>
            </form>
        </div>
        <p>Developer By Eman</p>
    </center>
</body>
</html>