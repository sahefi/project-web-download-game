<?php 
require "fungsi.php";

session_start();

if(!isset($_SESSION["username"]) ){
  header("Location: login.php");
  exit;
}
$dataProduk = query("SELECT * FROM game");
?>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>  
    <link rel="stylesheet" type="text/css" href="css/simulasi.css"> 
</head>
<body>
    <div class="header">   
        <h1>APS</h1>
        <ul class="nav">
            <li><a href="index.php">Home</a></li>
            <li class="dropdown">
            <a href="#" class="dropla">Genre</a>
        <div class="drop">
          <a href="simulasi.php">Simulasi</a>
        </div>
        </li>
        <li><a href="keranjang.php">Keranjang</a></li>
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

          <?php foreach($dataProduk as $dp):?>
        <div class="card" style="width: 18rem;">
        <img src="<?= $dp['gambar']?>">
      <div class="card-body">
        <h5 class="card-title"><?= $dp ["Judul"]; ?></h5>
      </div>
      <ul class="list-group list-group-flush">
        <li  class="list-group-item text-danger">Rp.<?= $dp ["harga"]; ?></li>
      </ul>
      <div class="card-body">
      <a href="beli.php?id=<?=$dp['id'];?>"><button type="button" class="btn btn-success">order</button></a>
      </div>
    </div>
    <?php endforeach;?>
    </body>
    </html>
<style>
  .card{
    float:left;
    margin-left:2%;
    margin-top:5%;
  }
  img{
    width: 100%;
    height:200px;
  }
</style>
        