<?php
    $kode_fktp = filter_input(INPUT_POST,"kodefktp", FILTER_SANITIZE_SPECIAL_CHARS);
    $nama_fktp = filter_input(INPUT_POST,"namafktp", FILTER_SANITIZE_SPECIAL_CHARS);
    $jenis_fktp = filter_input(INPUT_POST,"jenisfktp", FILTER_SANITIZE_SPECIAL_CHARS);
    $kantorcabang_fktp = filter_input(INPUT_POST,"kantorcabangfktp", FILTER_SANITIZE_SPECIAL_CHARS);
    $kabupatenkota_fktp = filter_input(INPUT_POST,"kabupatenkotafktp", FILTER_SANITIZE_SPECIAL_CHARS);
    $kepwil_fktp = filter_input(INPUT_POST,"kepwilfktp", FILTER_SANITIZE_SPECIAL_CHARS);
    $kodekepwil_fktp = filter_input(INPUT_POST,"kodekepwilfktp", FILTER_SANITIZE_SPECIAL_CHARS);

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

    if(empty($kode_fktp)){
        echo"Masukan Kode FKTP";
    } else
    if(empty($nama_fktp)){
        echo"Masukan Nama FKTP";
    } else
    if(empty($jenis_fktp)){
        echo"Masukan Jenis FKTP";
    } else
    if(empty($kantorcabang_fktp)){
        echo"Masukan Kantor Cabang FKTP";
    } else
    if(empty($kabupatenkota_fktp)){
        echo"Masukan Kabupaten / Kota FKTP";
    } else
    if(empty($kepwil_fktp)){
        echo"Masukan Kedeputian Wilayah FKTP";
    } else
    if(empty($kodekepwil_fktp)){
        echo"Masukan Kode Kedeputian Wilayah FKTP";
    }
    else{
        $sql = "INSERT INTO fktp (fktp_kode, fktp_nama, fktp_jenis, fktp_cabang, fktp_daerah, fktp_kepwil, fktp_kodekepwil)
                VALUES ('$kode_fktp', '$nama_fktp','$jenis_fktp', '$kantorcabang_fktp', '$kabupatenkota_fktp', '$kepwil_fktp', '$kodekepwil_fktp')";
                mysqli_query($conn, $sql);
                echo"Berhasil Terdaftar";
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