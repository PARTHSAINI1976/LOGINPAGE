<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <h1 align ="center" class="my-3">LOGIN PAGE</h1>

    <?php
    session_start();

    $user_name = "Gamer";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $email = $_POST['email'];
      $pass = $_POST['pass'];

      $servername = "localhost" ; 
      $username = "root";
      $password = "" ;
      $database = "LOGIN"; 

      $connect  = mysqli_connect($servername,$username,$password,$database) ; 
      if($connect){
        echo "<div class='alert alert-success' role='alert'>
              Connected To A Database Successsfully!
              </div>" ;}
      else if(!$connect){
        echo "<div class='alert alert-danger' role='alert'>
              ERROR WHILE CONNECTING!
              </div>" ; }
      else{
        echo mysqli_error($connect);
      }

      $create_table = "CREATE TABLE `LOGIN`.`Data` ( `Email` VARCHAR(60) NOT NULL , `Password` TEXT NOT NULL) " ;

      $table_result = mysqli_query($connect,$create_table);

      $insert_data = "INSERT INTO `Data` (`Email` , `Password`) VALUES ('$email' , '$pass')" ;
      $insert_result = mysqli_query($connect , $insert_data);

      if($insert_result){
        echo "DATA HAS BEEN INSERTED SUCCESSFULLT" ;
      }

     //OTHER DATABASE DATA //

     $_SESSION['email'] = $email ;
     $_SESSION['pass']  = $pass ;
     $_SESSION['user_name'] = $user_name;

    }
    ?>
    <div class="loginform">
        <h2 class="mx-5">LOGINFORM:</h2>
        <form action ="index.php" method = "POST" >
            <div class="mb-3 mx-5">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name = "email">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3 mx-5">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="pass" name = "pass">
            </div>
            <div class="mb-3 mx-5 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary mx-5">Submit</button>

            <a href='/LOGINPAGE/frontpage.php' class='btn btn-primary'>Click To Proceed</a>"
          </form>
    </div>
</body>
</html>