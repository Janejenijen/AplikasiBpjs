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
  <title>Pilih FKRTL</title>
</head>

<!-- Table FKRTL -->
<div class="container my-5">
  <h3>Data FKRTL</h3>

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

            $sqlsearch = "SELECT * FROM fkrtl WHERE fkrtl_kode LIKE '%$search%' OR fkrtl_nama LIKE'%$search%'";
            $resultsearch = mysqli_query($conn,$sqlsearch);
            if($resultsearch){
              if(mysqli_num_rows($resultsearch)>0){
                echo '<thead>
                <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Action</th>
                </tr>
                </thead>';
                while($rowsearch = mysqli_fetch_assoc($resultsearch)){
                echo "
                <tbody>
                <tr>
                   <td>$rowsearch[fkrtl_kode]</td>
                   <td>$rowsearch[fkrtl_nama]</td>
                   <td>
                      <a class='btn btn-primary btn-sm' href='formtahunanfkrtl.php?data=$rowsearch[fkrtl_id]'>Pilih</a>
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

  <table class="table">
    <thead>
     <th>Kode</th>
     <th>Nama</th>
     <th>Action</th>
    </thead>
    <tbody>
      <?php
      //Baca Row
      $sql = "SELECT * FROM fkrtl";
      $result = $conn->query($sql);

      if(!$result){
       die("Invalid query: " . $conn->error);
      }

      //Baca Data
      while($row = $result->fetch_assoc()){
       echo "
       <tr>
         <td>$row[fkrtl_kode]</td>
         <td>$row[fkrtl_nama]</td>
         <td>
            <a class='btn btn-primary btn-sm' href='formtahunanfkrtl.php?data=$row[fkrtl_id]''>Pilih</a>
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