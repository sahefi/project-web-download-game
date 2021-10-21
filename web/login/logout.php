<?php 

session_start();
session_unset();

"<script>alert (anda berhasil Logout)</script>";
header("Location: Login.php");
exit;

?>