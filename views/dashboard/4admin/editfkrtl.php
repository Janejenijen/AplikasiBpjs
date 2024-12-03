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


    $fkrtl_id = "";
    $fkrtl_name = "";
    $fkrtl_kode = "";

    $errorMessage = "";
    $successMessage = "";

    if ( $_SERVER['REQUEST_METHOD'] == 'GET'){
        //TAMPILKAN DATA
        if ( !isset($_GET["fkrtl_id"]) ) {
            header("location: admin.php");
            exit;
        }

        $fkrtl_id = $_GET["fkrtl_id"];

        $sql = "SELECT * FROM fkrtl WHERE fkrtl_id = $fkrtl_id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if (!$row){
            header("location: admin.php");
            exit;
        }

        $fkrtl_name = $row["fkrtl_nama"];
        $fkrtl_kode = $row["fkrtl_kode"];

    }
    else {
        // POST METHOD

        $fkrtl_id = $_POST["fkrtl_id"];
        $fkrtl_name = $_POST["fkrtl_nama"];
        $fkrtl_kode = $_POST["fkrtl_kode"];

        do{
            if (empty($fkrtl_id) || empty($fkrtl_name) || empty($fkrtl_kode)){
                $errorMessage = "Semua Harus Diisi";
                break;
            }

            $sql = "UPDATE fkrtl ".
            "SET fkrtl_nama = '$fkrtl_name', fkrtl_kode = '$fkrtl_kode' ".
            "WHERE fkrtl_id = $fkrtl_id";
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
        <title>Edit Pengguna</title>
    </head>
    <body>
        <div class="container my-5">
            <h2>Edit Data Pengguna</h2>
           

            <form method="post">
                <input type="hidden" name="fkrtl_id" value="<?php echo $fkrtl_id;?>">
                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Nama FKRTL</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="fkrtl_nama" value="<?php echo $fkrtl_name;?>">
                    </div>
                </div>
                
                <br>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Kode FKRTL</label>
                    <div class="col-sm-6">
                        <input type="number" class="form-control" name="fkrtl_kode" min="0" max="99999999" value="<?php echo $fkrtl_kode;?>">
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