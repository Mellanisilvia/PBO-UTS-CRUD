<?php
  include('db_config.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD - Tambah Data Siswa</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-transform: uppercase;
        color: black;
      }
      button {
          background-color: salmon;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
      }
      label {
        margin-top: 10px;
        float: left;
        text-align: left;
        width: 100%;
      }
      input {
        padding: 6px;
        width: 100%;
        box-sizing: border-box;
        background: #f8f8f8;
        border: 2px solid #ccc;
        outline-color: salmon;
      }
      div {
        width: 100%;
        height: auto;
      }
      .base {
        width: 400px;
        height: auto;
        padding: 20px;
        margin-left: auto;
        margin-right: auto;
        background: #ededed;
      }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Data Siswa</h1>
      <center>
      <form method="POST" action="prosesCreate.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama</label>
          <input type="text" name="nama" autofocus="" required="" />
        </div>
        <div>
          <label>NISN</label>
         <input type="text" name="nisn" />
        </div>
        <div>
          <label>Alamat</label>
         <input type="text" name="alamat" required="" />
        </div>
        <div>
          <label>No. Telepon</label>
         <input type="text" name="telepon" required="" />
        </div>
        <div>
          <label>Tempat Lahir</label>
         <input type="text" name="tempatLahir" required="" />
        </div>
        <div>
          <label>Tanggal Lahir</label>
         <input type="text" name="tanggalLahir" required="" />
        </div>
        <div>
          <label>Foto</label>
         <input type="file" name="foto" required="" />
        </div>
        <div>
         <button type="submit">Simpan Data</button>
        </div>
        </section>
      </form>
  </body>
</html>