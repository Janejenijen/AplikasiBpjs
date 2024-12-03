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


    $fktp_id = "";
    $fktp_kodekepwil = "";
    $fktp_kepwil = "";
    $fktp_cabang = "";
    $fktp_daerah = "";
    $fktp_kode = "";
    $fktp_nama = "";
    $fktp_jenis = "";

    $errorMessage = "";
    $successMessage = "";

    if ( $_SERVER['REQUEST_METHOD'] == 'GET'){
        //TAMPILKAN DATA
        if ( !isset($_GET["fktp_id"]) ) {
            header("location: admin.php");
            exit;
        }

        $fktp_id = $_GET["fktp_id"];

        $sql = "SELECT * FROM fktp WHERE fktp_id = $fktp_id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if (!$row){
            header("location: admin.php");
            exit;
        }

        $fktp_kodekepwil = $row["fktp_kodekepwil"];
        $fktp_kepwil = $row["fktp_kepwil"];
        $fktp_cabang = $row["fktp_cabang"];
        $fktp_daerah = $row["fktp_daerah"];
        $fktp_kode = $row["fktp_kode"];
        $fktp_nama = $row["fktp_nama"];
        $fktp_jenis = $row["fktp_jenis"];

    }
    else {
        // POST METHOD

        $fktp_id = $_POST["fktp_id"];
        $fktp_kodekepwil = $_POST["fktp_kodekepwil"];
        $fktp_kepwil = $_POST["fktp_kepwil"];
        $fktp_cabang = $_POST["fktp_cabang"];
        $fktp_daerah = $_POST["fktp_daerah"];
        $fktp_nama = $_POST["fktp_nama"];
        $fktp_kode = $_POST["fktp_kode"];
        $fktp_jenis = $_POST["fktp_jenis"];

        do{
            if (empty($fktp_id)  || empty($fktp_nama) || empty($fktp_kode) || empty($fktp_kodekepwil)|| empty($fktp_cabang)|| empty($fktp_daerah)|| empty($fktp_kepwil)|| empty($fktp_jenis)){
                $errorMessage = "Semua Harus Diisi";
                break;
            }

            $sql = "UPDATE fktp ".
            "SET fktp_nama = '$fktp_nama', fktp_kode = '$fktp_kode', fktp_kepwil = '$fktp_kepwil', fktp_kodekepwil = '$fktp_kodekepwil', fktp_cabang = '$fktp_cabang', fktp_daerah = '$fktp_daerah', fktp_jenis = '$fktp_jenis' ".
            "WHERE fktp_id = $fktp_id";
            echo"Client diupdate";

            $result = $conn->query($sql);

            if (!$result){
                echo"Tidak tersimpan";
                break;
            }

            $successMessage = "Client diupdate";

            header("location: admin.php");

        } while (false);
    }

    mysqli_close($conn)
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
     <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit FKTP</title>
    </head>
    <body>
        <div class="container my-5">
            <h2>Edit Data FKTP</h2>
           

            <form method="post">
                <input type="hidden" name="fktp_id" value="<?php echo $fktp_id;?>">
                <div class="row mb-3">
                <div class="row mb-3">

                    <label class="col-sm-3 col-form-label">Kode FKTP</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="fktp_kode" min="0" max="99999999" value="<?php echo $fktp_kode;?>">
                    </div>

                    <br>

                    <label class="col-sm-3 col-form-label">Nama FKTP</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="fktp_nama" value="<?php echo $fktp_nama;?>">
                    </div>

                    <br>

                    <label class="col-sm-3 col-form-label">Jenis FKTP</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="fktp_jenis" value="<?php echo $fktp_jenis;?>">
                    </div>

                    <br>

                    <label class="col-sm-3 col-form-label">Kantor Cabang FKTP</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="fktp_cabang" value="<?php echo $fktp_cabang;?>">
                    </div>

                    <br>

                    <label class="col-sm-3 col-form-label">Kabupaten Kota FKTP</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="fktp_daerah" value="<?php echo $fktp_daerah;?>">
                    </div>

                    <br>

                    <label class="col-sm-3 col-form-label">Kedeputian Wilayah</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="fktp_kepwil" value="<?php echo $fktp_kepwil;?>">
                    </div>

                    <br>

                    <label class="col-sm-3 col-form-label">Kode Kedeputian Wilayah</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="fktp_kodekepwil" min="0" max="99" value="<?php echo $fktp_kodekepwil;?>">
                    </div>
                </div>  
               

                <div class="row mb-3">
                    <div class="offset-sm-3 col-sm-3 d-grid">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    
                    <div class="col-sm-3 d-grid">
                        <a class="btn btn-outline-primary" href="admin.php" role="button">Cancel</a> 
                    </div>
                </div>
            </form>

        </div>
    </body>
    </html>
    <script>
    </script>