<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
</head>
<body>
    <h1 align = "center">Logout</h1> <br><br>

    <?php
    
    session_start();
    session_unset() ;
    if (session_destroy()){
        echo "<div class='alert alert-warning' role='alert'>
              You Have Been Logout
              </div>" ;
    }
    ?>
</body>
</html>