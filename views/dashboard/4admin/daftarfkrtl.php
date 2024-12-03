<?php
    $kode_fkrtl = filter_input(INPUT_POST,"kodefkrtl", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama_fkrtl = filter_input(INPUT_POST,"namafkrtl", FILTER_SANITIZE_SPECIAL_CHARS);

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

    if(empty($kode_fkrtl)){
        echo"Masukan Kode FKRTL";
    }
    elseif(empty($nama_fkrtl)){
        echo"Masukan Nama FKRTL";
    }
    else{
        $sql = "INSERT INTO fkrtl (fkrtl_kode, fkrtl_nama)
                VALUES ('$kode_fkrtl', '$nama_fkrtl')";
                mysqli_query($conn, $sql);
                echo"Pendaftaran Berhasil";
    }
   

    mysqli_close($conn);
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
     <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <br>
        <button onclick="kembaliDashboard()"> Kembali ke Dashboard</button>
    </body>
    </html>
    <script>
        function kembaliDashboard(){
            location.href = "admin.php";
        }
    </script>