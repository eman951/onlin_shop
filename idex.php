<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comme:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>online shop</title>
    <link rel ="stylesheet" href="index.css">
</head>
<body>
    <center>
        <div class="main">
            <form action="insert.php" method="post" enctype="multipart/form-data">>
                <h2>online shop</h2>
                <img src="logo.png" alt="logo" width="450px">
                <input type="test" name= 'name'>
                <br> 
                <input type="test" name= 'price'>
                <br>
                <input type="file" id = "file" name ='image' style ='display:none;'>
                <label for ="file">upload image </label>
                <button name ='upload'> upload product</button>
                <br><br>
                <a href="products.php"> show products</a>
            </form>
        </div>
        <p>Developer By Eman</p>
    </center>
</body>
</html>