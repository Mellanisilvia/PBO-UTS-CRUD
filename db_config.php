<?php
  $host = "localhost"; 
  $user = "root";
  $pass = "";
  $database = "db_siswa"; //nama database
  $koneksi = mysqli_connect($host,$user,$pass,$database);

  if(!$koneksi){
    die ("Koneksi dengan database gagal: ".mysql_connect_error());
  }
?>