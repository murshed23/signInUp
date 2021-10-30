<?php
    session_start();
    $id= $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="bg-primary bg-gradient">
    <div class="container-fluid">
        <form action="logout.php" method="post">
            <div class="text-center text-white justify-center">
                <h1 class="" style="font-size: 100px;">Welcome<br><?php echo $id ?></h1>
                <button>Sign Out</button>
            </div>
        </form>
    </div>
    
</body>
</html>