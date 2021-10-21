<?php 
session_start();

if( !isset($_SESSION["username"]) ){
  header("Location: ../login/Login.php");
  exit;
}

?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css"> 
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
          <p class="tag">Simulasi</p>
        </div>
        
        <div class=page> 
          <ul class="panah">
            <li class="panah"><a href="#" class="previous round">&#8249;</a></li>
            <li class="panah"><p class="p">1/1</p></li>
            <li class="panah"><a href="#" class="next round">&#8250;</a></li>
          </ul>
          </div>

      <div class="container">
        <img src="../simulasi/img/maxresdefault.jpg" alt="Snow" style="width:100%">
        <button class="btn">Donwload</button>
        <p class="deskripsi">Slime Ratcher</p>
      </div>

      <div class="container">
        <img src="../simulasi/img/yt.jpg" alt="Snow" style="width:100%">
        <button class="btn">Donwload</button>
        <p class="deskripsi">Youtuber Life</p>
      </div>

      <div class="container">
        <img src="./img/th.jpg" alt="Snow" style="width:100%">
        <button class="btn">Donwload</button>
        <p class="deskripsi">Cooking Simulator</p>
      </div>

      <div class="container">
        <img src="./img/PC-Building-Simulator-Free-Download.jpg" alt="Snow" style="width:100%">
        <button class="btn">Donwload</button>
        <p class="deskripsi">PC Building Simulator</p>
      </div>
      
      <div class="container">
        <img src="./img/maxresdefault (1).jpg" alt="Snow" style="width:100%">
        <button class="btn">Donwload</button>
        <p class="deskripsi">The Universim</p>
      </div>
      
      
      
      
</body>
       
     