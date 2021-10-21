<?php 
session_start();

if( !isset($_SESSION["username"]) ){
  header("Location: ../login/Login.php");
  exit;
}

?>
<html>
<head>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">   
        <h1>APS</h1>
        <ul class="nav">
            <li><a href="../home/index.php">Home</a></li>
            <li class="dropdown">
            <a href="#" class="dropla">Genre</a>
        <div class="drop">
          <a href="../simulasi/index.php">Simulasi</a>
            <a href="../horror/index.php">Horror</a>
        </div>
        </li>
        <div class="container-fluid">
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-danger" type="submit">Search</button>
              </form>
            </div>
          </ul>
          <p class="tag">Horor</p>
        </div>
        
        <div class=page> 
          <ul class="panah">
            <li class="panah"><a href="#" class="previous round">&#8249;</a></li>
            <li class="panah"><p class="p">1/1</p></li>
            <li class="panah"><a href="#" class="next round">&#8250;</a></li>
          </ul>
          </div>

      <div class="container">
        <img src="../horror/img/plaque.jpg" alt="Snow" style="width:100%">
        <button class="btn">Donwload</button>
        <p class="deskripsi">Plaque Tale</p>
      </div>

      <div class="container">
        <img src="../horror/img/pamali.jpg" alt="Snow" style="width:100%">
        <button class="btn">Donwload</button>
        <p class="deskripsi">Pamali</p>
      </div>

      <div class="container">
        <img src="./img/red-barrels-outlast-chris-walker-video-games-wallpaper-preview.jpg" alt="Snow" style="width:100%">
        <button class="btn">Donwload</button>
        <p class="deskripsi">Outlast</p>
      </div>

      <div class="container">
        <img src="./img/179-1798037_blair-witch.jpg" alt="Snow" style="width:100%">
        <button class="btn">Donwload</button>
        <p class="deskripsi">Blair Witch</p>
      </div>
      
      <div class="container">
        <img src="./img/ss_c618c7a7c318388296d6917acd0ed35bc4e72b66.1920x1080.jpg" alt="Snow" style="width:100%">
        <button class="btn">Donwload</button>
        <p class="deskripsi">Dread Out</p>
      </div>
</body>
</html>
       
     