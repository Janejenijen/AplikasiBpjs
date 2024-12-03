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


    $user_id = "";
    $email = "";
    $password = "";
    $role = "";

    $errorMessage = "";
    $successMessage = "";

    if ( $_SERVER['REQUEST_METHOD'] == 'GET'){
        //TAMPILKAN DATA
        if ( !isset($_GET["user_id"]) ) {
            header("location: admin.php");
            exit;
        }

        $user_id = $_GET["user_id"];

        $sql = "SELECT * FROM users WHERE user_id=$user_id";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        if (!$row){
            header("location: admin.php");
            exit;
        }

        $email = $row["email"];
        $password = $row["password"];
        $role = $row["role"];

    }
    else {
        // POST METHOD

        $user_id = $_POST["user_id"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $role = $_POST["role"];

        do{
            if (empty($user_id) || empty($email) || empty($password) || empty($role)){
                $errorMessage = "Semua Harus Diisi";
                    echo '<script language="javascript">';
                    echo 'alert("Semua Harus Diisi")';
                    echo '</script>';
                break;
            }

            $sql = "UPDATE users ".
            "SET email = '$email', password = '$password', role = '$role' ".
            "WHERE user_id = $user_id";
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
                <input type="hidden" name="user_id" value="<?php echo $user_id;?>">

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Nama Pengguna</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="email" value="<?php echo $email;?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" name="password" value="<?php echo $password;?>">
                    </div>
                </div>

                <div class="row mb-3">
                    <label class="col-sm-3 col-form-label">Tipe Pengguna</label>
                    <div class="col-sm-6">
                    <select id="role" name="role" selected="faskes">
                        <option value="">Tipe Pengguna</option>
                        <option value="pegawai">Pegawai</option>
                        <option value="faskes">Faskes</option>
                    </select>
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