<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "faskes";
    $conn = "";
   
    try {
        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);
    }
    catch(mysqli_sql_exception){
        echo"Tidak terkoneksi <br>";
    }
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
     <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Laporan Tahunan FKTP</title>
        <style>
            table, th, td{
                border: 1px solid black;
                border-collapse: collapse;
                padding: 5x;
            }

            td{
                text-align: center;
            }

            table{
                margin-left: auto;
                margin-right: auto;
            }
            tr:nth-child(even){
                background-color: #dddddd;
            }
            th{
                background-color: #5a5a5a;
                color: white;
            }
        </style>
    </head>
    <body>
        <?php 
        $data = $_GET['data'];
        ?>
        <div class="container my-5">
            <h2>Laporan Tahunan FKTP</h2>
        </div>

            <input type="hidden" name="fktp" value="<?php echo $data;?>">

        <form method="post">
        <input type="number" placeholder="Cari" name="search" max="9999" min="2000">
        <button name="submit">Search</button>
        </form>
        <div class="container my-5">
        <table class="table">
            <?php
            if(isset($_POST['submit'])){
                $search = $_POST['search'];

                $sqlsearch = "SELECT * FROM tahunan WHERE tahunan_tahun LIKE '%$search%' and fktp_id='$data'";
                $resultsearch = mysqli_query($conn,$sqlsearch);
                if($resultsearch){
                if(mysqli_num_rows($resultsearch)>0){
                    echo '<thead>
                    <tr>
                    <th>Bulan</th>
                    <th>Iur Biaya</th>
                    <th>Kessan</th>
                    <th>Antri Online</th>
                    <th>Kontak Tidak Langsung</th>
                    <th>Pakta Integritas</th>
                    <th>PRB</th>
                    <th>Kepatuhan</th>
                    </tr>
                    </thead>';
                    while($rowsearch = mysqli_fetch_assoc($resultsearch)){
                    echo "
                    <tbody>
                    <tr>
                    <td>$rowsearch[tahunan_bulan]</td>
                    <td>$rowsearch[tahunan_iurbiaya]</td>
                    <td>$rowsearch[tahunan_kessan]</td>
                    <td>$rowsearch[tahunan_antrionline]</td>
                    <td>$rowsearch[tahunan_kontaktdklangsung]</td>
                    <td>$rowsearch[tahunan_paktaintegritas]</td>
                    <td>$rowsearch[tahunan_prb]</td>
                    <td>$rowsearch[tahunan_kepatuhan]</td>
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
        
    <div>
        <button onclick="kembali()">Kembali</button>
        </div> 

        <script>
            function kembali(){
                location.href = "kabag.php";
            }
        </script>
    </body>
    </html>
    