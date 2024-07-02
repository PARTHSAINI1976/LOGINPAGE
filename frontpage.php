<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WEBSITE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            New Features
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <a href='/LOGINPAGE/logout.php' class='btn btn-primary mx-2'>Logout</a>"
      </form>
    </div>
  </div>
</nav>
  <?php
  session_start();
  if(isset($_SESSION['email'])){
  echo "<div class='alert alert-success' role='alert'>
        Welcome ! Hope You Like Our Website.
        </div><br><br> ;
        <br>
        <h3>You Maybe Searching For :</h3>
        
        <div class='card mx-5 my-4' style='width: 18rem;'>
        <img src='gtav.jpeg' class='card-img-top'>
        <div class='card-body'>
          <h5 class='card-title'>GTA-V</h5>
          <p class='card-text'>Experience GTA Online, a dynamic and ever-evolving online universe for up to 30 players, where you can rise from street-level hustler to become a kingpin of your own criminal empire.</p>
          <a href='https://www.rockstargames.com' class='btn btn-primary'>Visit Site</a>
        </div>
      </div> ";
      }

  else{
       echo "<div class='alert alert-danger' role='alert'>
             PLEASE LOGIN TO CONTINUE!!
            </div> 
            
            <br>
            <a href='/LOGINPAGE' class='btn btn-primary'>Click To Login</a>" ;}


?>
</body>
</html>