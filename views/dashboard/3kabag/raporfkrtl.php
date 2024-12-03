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

            $sqlsearch = "SELECT * FROM rapor WHERE user_id LIKE '%$search%' OR fkrtl_id LIKE'%$search%' OR rapor_id LIKE '%$search%'";
            $resultsearch = mysqli_query($conn,$sqlsearch);
            if($resultsearch){
              if(mysqli_num_rows($resultsearch)>0){
                echo '<thead>
                <tr>
                <th>ID</th>
                <th>Pegawai</th>
                <th>Faskes</th>
                <th>Iur Biaya</th>
                <th>Kessan</th>
                <th>Antri Online</th>
                <th>Kontak Tidak Langsung</th>
                <th>Tanggal Approval</th>
                <th>Nilai PRB</th>
                <th>Nilai Kepatuhan</th>
                <th>Tanggal</th>
                </tr>
                </thead>';
                while($row = mysqli_fetch_assoc($resultsearch)){
                echo "
                <tbody>
                <tr>
                  <td>$row[rapor_id]</td>
                  <td>$row[user_id]</td>
                  <td>$row[fkrtl_id]</td>
                  <td>$row[rapor_iurbiaya]</td>
                  <td>$row[rapor_kessan]</td>
                  <td>$row[rapor_antrionline]</td>
                  <td>$row[rapor_kontaktdklangsung]</td>
                  <td>$row[rapor_paktaintegritas]</td>
                  <td>$row[rapor_prb]</td>
                  <td>$row[rapor_nilai]</td>
                 </tr>
                 </tbody>
                ";
                }
              }else{
                echo '<h3 class=text-danger>Data tidak ditemukan</h3>';
            }
        }
        }
        mysqli_close($conn)
        ?>
      </table>
    </div>
  </div>

  <div>
        <button onclick="kembali()">Kembali</button>
        </div> 

        <script>
            function kembali(){
                location.href = "kabag.php";
            }
        </script>