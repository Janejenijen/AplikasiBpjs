<?php
    $username = filter_input(INPUT_POST,"email", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST,"password", FILTER_SANITIZE_SPECIAL_CHARS);
    $role = filter_input(INPUT_POST,"role");

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

    if(empty($username)){
        echo"Masukan Username";
    }
    elseif(empty($password)){
        echo"Masukan Password";
    }
    else{
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (email, password, role)
                VALUES ('$username', '$password', '$role')";
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
