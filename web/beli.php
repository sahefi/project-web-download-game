<?php 
session_start();
  $id= $_GET['id'];

  if(isset($_SESSION['keranjang'][$id])){
      $_SESSION['keranjang'][$id]+=1;
  }else{
      $_SESSION['keranjang'][$id]=1;
  }

  echo "<pre>";
  print_r($_SESSION);
  echo"</pre>";

  echo "<script>alert('prosuk telah ditambahkan')</script>";
  header('location: keranjang.php');
  
?>

