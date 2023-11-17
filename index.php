<?php
  include('db_config.php');
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD - Data Siswa</title>
    <style type="text/css">
      * {
        font-family: "Trebuchet MS";
      }
      h1 {
        text-align: center;
        text-transform: uppercase;
        color: black;
      }
      table {
        border: solid 1px #DDEEEE;
        border-collapse: collapse;
        border-spacing: 0;
        width: 90%;
        margin: 20px auto 10px auto;
        border-radius: 5px;
      }
      table thead th {
        background-color: #FFEEF4;
        border: solid 1px #DDEEEE;
        color: #336B6B;
        padding: 10px;
        text-align: left;
        text-shadow: 1px 1px 1px #fff;
        text-align: center;
        border-radius: 5px;
      }
      table tbody td {
        border: solid 1px #DDEEEE;
        color: #333;
        padding: 10px;
        text-shadow: 1px 1px 1px #fff;
        border-radius: 5px;
      }
      .btn-primary {
        margin-left: 70px;
        background-color: blue;
        color: #fff;
        padding: 10px;
        border-radius: 20px;
        text-shadow: 1px 1px 1px #fff;
        font-size: 13px;
      }
      .btn-success {
        background-color: green;
        color: #fff;
        padding: 10px;
        text-decoration: none;
        border-radius: 20px;
        font-size: 12px;
      }
      .btn-danger {
        background-color: red;
        color: #fff;
        padding: 10px;
        text-decoration: none;
        border-radius: 20px;
        font-size: 12px;
      }
      a {
        background-color: salmon;
        color: #fff;
        padding: 10px;
        text-decoration: none;
        font-size: 12px;
      }
    </style>
  </head>
  <body>
    <h1>Data Siswa ...</h1>
    <a class="btn-primary" href="create.php">+ &nbsp;Tambah Data Siswa</a>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NISN</th>
          <th>Alamat</th>
          <th>No.Telepon</th>
          <th>Tempat Lahir</th>
          <th>Tanggal Lahir</th>
          <th>Foto</th>
          <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM siswa ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['nisn']; ?></td>
          <td><?php echo $row['alamat']; ?></td>
          <td><?php echo $row['telepon']; ?></td>
          <td><?php echo $row['tempatLahir']; ?></td>
          <td><?php echo $row['tanggalLahir']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['foto']; ?>" style="width: 120px;"></td>
          <td>
              <a class="btn-success" href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
              <a class="btn-danger" href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>