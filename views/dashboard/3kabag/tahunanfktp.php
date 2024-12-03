<?php
$db_server = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "faskes";
$conn = "";

//Koneksi
$conn = new mysqli($db_server, $db_user, $db_pass, $db_name);

//Cek Koneksi
if($conn->connect_error){
 die("Koneksi gagal: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pilih FKTP</title>
</head>

<!-- Tabel FKTP -->
<div class="container my-5">
  <h3>Data FKTP</h3>

  <div class="container">
    <form method="post">
      <input type="text" placeholder="Cari" name="search">
      <button name="submit">Search</button>
    </form>
    <div class="container my-5">
      <table class="table">
        <?php
        if(isset($_POST['submit'])){
            $search = $_POST['search'];

            $sqlsearch = "SELECT * FROM fktp WHERE fktp_kode LIKE '%$search%' OR fktp_nama LIKE'%$search%' OR fktp_kodekepwil LIKE'%$search%' OR fktp_kepwil LIKE'%$search%' OR fktp_daerah LIKE'%$search%' OR fktp_cabang LIKE'%$search%' OR fktp_jenis LIKE'%$search%'";
            $resultsearch = mysqli_query($conn,$sqlsearch);
            if($resultsearch){
              if(mysqli_num_rows($resultsearch)>0){
                echo '<thead>
                <tr>
                <th>Kode Kedeputian Wilayah</th>
                <th>Kedeputian Wilayah</th>
                <th>Kantor Cabang</th>
                <th>Kota / Kabupaten</th>
                <th>Kode FKTP</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Action</th>
                </tr>
                </thead>';
                while($rowsearch = mysqli_fetch_assoc($resultsearch)){
                echo "
                <tbody>
                <tr>
                   <td>$rowsearch[fktp_kodekepwil]</td>
                   <td>$rowsearch[fktp_kepwil]</td>
                   <td>$rowsearch[fktp_cabang]</td>
                   <td>$rowsearch[fktp_daerah]</td>
                   <td>$rowsearch[fktp_kode]</td>
                   <td>$rowsearch[fktp_nama]</td>
                   <td>$rowsearch[fktp_jenis]</td>
                   <td>
                    <a class='btn btn-primary btn-sm' href='formtahunanfktp.php?data=$rowsearch[fktp_id]'>Pilih</a>
                   </td>
                 </tr>
                 </tbody>
                ";
                }
              }else{
                echo '<h3 class=text-danger>Data tidak ditemukan</h3>';
            }
        }
        }
        ?>
      </table>
    </div>
  </div>
  
  <br>
  <br>

<div class="container my-5">
  <h3>Data FKTP</h3>
  <table class="table">
    <thead>
     <th>Kode Kedeputian Wilayah</th>
     <th>Kedeputian Wilayah</th>
     <th>Kantor Cabang</th>
     <th>Kota / Kabupaten</th>
     <th>Kode FKTP</th>
     <th>Nama</th>
     <th>Jenis</th>
     <th>Action</th>
    </thead>
    <tbody>
      <?php

      //Baca Row
      $sql = "SELECT * FROM fktp";
      $result = $conn->query($sql);

      if(!$result){
       die("Invalid query: " . $conn->error);
      }

      //Baca Data
      while($row = $result->fetch_assoc()){
       echo "
       <tr>
         <td>$row[fktp_kodekepwil]</td>
         <td>$row[fktp_kepwil]</td>
         <td>$row[fktp_cabang]</td>
         <td>$row[fktp_daerah]</td>
         <td>$row[fktp_kode]</td>
         <td>$row[fktp_nama]</td>
         <td>$row[fktp_jenis]</td>
         <td>
            <a class='btn btn-primary btn-sm' href='formtahunanfktp.php?data=$row[fktp_id]'>Pilih</a>
         </td>
       </tr>
      ";
    }

    mysqli_close($conn)
    ?>
   </tbody>
   </table>
   </div>

   <div class="col-sm-3 d-grid">
    <br>
    <a class="btn btn-outline-primary" href="kabag.php" role="button">Kembali</a> 
</div>
</html>