<?php
    $fktp = filter_input(INPUT_POST,"fktp", FILTER_SANITIZE_SPECIAL_CHARS);
    $tahun = filter_input(INPUT_POST,"tahun", FILTER_SANITIZE_SPECIAL_CHARS);

    $januari = "januari";
    $januariiurbiaya = filter_input(INPUT_POST,"januariiurbiaya", FILTER_SANITIZE_SPECIAL_CHARS);
    $januarikessan = filter_input(INPUT_POST,"januarikessan");
    $januariantri = filter_input(INPUT_POST,"januariantri", FILTER_SANITIZE_SPECIAL_CHARS);
    $januarikontak = filter_input(INPUT_POST,"januarikontak", FILTER_SANITIZE_SPECIAL_CHARS);
    $januaripakta = filter_input(INPUT_POST,"januaripakta", FILTER_SANITIZE_SPECIAL_CHARS);
    $januariprb = filter_input(INPUT_POST,"januariprb", FILTER_SANITIZE_SPECIAL_CHARS);
    $januarikepatuhan = filter_input(INPUT_POST,"januarikepatuhan", FILTER_SANITIZE_SPECIAL_CHARS);

    $februari = "februari";
    $februariiurbiaya = filter_input(INPUT_POST,"februariiurbiaya", FILTER_SANITIZE_SPECIAL_CHARS);
    $februarikessan = filter_input(INPUT_POST,"februarikessan");
    $februariantri = filter_input(INPUT_POST,"februariantri", FILTER_SANITIZE_SPECIAL_CHARS);
    $februarikontak = filter_input(INPUT_POST,"februarikontak", FILTER_SANITIZE_SPECIAL_CHARS);
    $februaripakta = filter_input(INPUT_POST,"februaripakta", FILTER_SANITIZE_SPECIAL_CHARS);
    $februariprb = filter_input(INPUT_POST,"februariprb", FILTER_SANITIZE_SPECIAL_CHARS);
    $februarikepatuhan = filter_input(INPUT_POST,"februarikepatuhan", FILTER_SANITIZE_SPECIAL_CHARS);

    $maret = "maret";
    $maretiurbiaya = filter_input(INPUT_POST,"maretiurbiaya", FILTER_SANITIZE_SPECIAL_CHARS);
    $maretkessan = filter_input(INPUT_POST,"maretkessan");
    $maretantri = filter_input(INPUT_POST,"maretantri", FILTER_SANITIZE_SPECIAL_CHARS);
    $maretkontak = filter_input(INPUT_POST,"maretkontak", FILTER_SANITIZE_SPECIAL_CHARS);
    $maretpakta = filter_input(INPUT_POST,"maretpakta", FILTER_SANITIZE_SPECIAL_CHARS);
    $maretprb = filter_input(INPUT_POST,"maretprb", FILTER_SANITIZE_SPECIAL_CHARS);
    $maretkepatuhan = filter_input(INPUT_POST,"maretkepatuhan", FILTER_SANITIZE_SPECIAL_CHARS);

    $april = "april";
    $apriliurbiaya = filter_input(INPUT_POST,"apriliurbiaya", FILTER_SANITIZE_SPECIAL_CHARS);
    $aprilkessan = filter_input(INPUT_POST,"aprilkessan");
    $aprilantri = filter_input(INPUT_POST,"aprilantri", FILTER_SANITIZE_SPECIAL_CHARS);
    $aprilkontak = filter_input(INPUT_POST,"aprilkontak", FILTER_SANITIZE_SPECIAL_CHARS);
    $aprilpakta = filter_input(INPUT_POST,"aprilpakta", FILTER_SANITIZE_SPECIAL_CHARS);
    $aprilprb = filter_input(INPUT_POST,"aprilprb", FILTER_SANITIZE_SPECIAL_CHARS);
    $aprilkepatuhan = filter_input(INPUT_POST,"aprilkepatuhan", FILTER_SANITIZE_SPECIAL_CHARS);

    $mei = "mei";
    $meiiurbiaya = filter_input(INPUT_POST,"meiiurbiaya", FILTER_SANITIZE_SPECIAL_CHARS);
    $meikessan = filter_input(INPUT_POST,"meikessan");
    $meiantri = filter_input(INPUT_POST,"meiantri", FILTER_SANITIZE_SPECIAL_CHARS);
    $meikontak = filter_input(INPUT_POST,"meikontak", FILTER_SANITIZE_SPECIAL_CHARS);
    $meipakta = filter_input(INPUT_POST,"meipakta", FILTER_SANITIZE_SPECIAL_CHARS);
    $meiprb = filter_input(INPUT_POST,"meiprb", FILTER_SANITIZE_SPECIAL_CHARS);
    $meikepatuhan = filter_input(INPUT_POST,"meikepatuhan", FILTER_SANITIZE_SPECIAL_CHARS);

    $juni = "juni";
    $juniiurbiaya = filter_input(INPUT_POST,"juniiurbiaya", FILTER_SANITIZE_SPECIAL_CHARS);
    $junikessan = filter_input(INPUT_POST,"junikessan");
    $juniantri = filter_input(INPUT_POST,"juniantri", FILTER_SANITIZE_SPECIAL_CHARS);
    $junikontak = filter_input(INPUT_POST,"junikontak", FILTER_SANITIZE_SPECIAL_CHARS);
    $junipakta = filter_input(INPUT_POST,"junipakta", FILTER_SANITIZE_SPECIAL_CHARS);
    $juniprb = filter_input(INPUT_POST,"juniprb", FILTER_SANITIZE_SPECIAL_CHARS);
    $junikepatuhan = filter_input(INPUT_POST,"junikepatuhan", FILTER_SANITIZE_SPECIAL_CHARS);

    $juli = "juli";
    $juliiurbiaya = filter_input(INPUT_POST,"juliiurbiaya", FILTER_SANITIZE_SPECIAL_CHARS);
    $julikessan = filter_input(INPUT_POST,"julikessan");
    $juliantri = filter_input(INPUT_POST,"juliantri", FILTER_SANITIZE_SPECIAL_CHARS);
    $julikontak = filter_input(INPUT_POST,"julikontak", FILTER_SANITIZE_SPECIAL_CHARS);
    $julipakta = filter_input(INPUT_POST,"julipakta", FILTER_SANITIZE_SPECIAL_CHARS);
    $juliprb = filter_input(INPUT_POST,"juliprb", FILTER_SANITIZE_SPECIAL_CHARS);
    $julikepatuhan = filter_input(INPUT_POST,"julikepatuhan", FILTER_SANITIZE_SPECIAL_CHARS);

    $agustus = "agustus";
    $agustusiurbiaya = filter_input(INPUT_POST,"agustusiurbiaya", FILTER_SANITIZE_SPECIAL_CHARS);
    $agustuskessan = filter_input(INPUT_POST,"agustuskessan");
    $agustusantri = filter_input(INPUT_POST,"agustusantri", FILTER_SANITIZE_SPECIAL_CHARS);
    $agustuskontak = filter_input(INPUT_POST,"agustuskontak", FILTER_SANITIZE_SPECIAL_CHARS);
    $agustuspakta = filter_input(INPUT_POST,"agustuspakta", FILTER_SANITIZE_SPECIAL_CHARS);
    $agustusprb = filter_input(INPUT_POST,"agustusprb", FILTER_SANITIZE_SPECIAL_CHARS);
    $agustuskepatuhan = filter_input(INPUT_POST,"agustuskepatuhan", FILTER_SANITIZE_SPECIAL_CHARS);

    $september = "september";
    $septemberiurbiaya = filter_input(INPUT_POST,"septemberiurbiaya", FILTER_SANITIZE_SPECIAL_CHARS);
    $septemberkessan = filter_input(INPUT_POST,"septemberkessan");
    $septemberantri = filter_input(INPUT_POST,"septemberantri", FILTER_SANITIZE_SPECIAL_CHARS);
    $septemberkontak = filter_input(INPUT_POST,"septemberkontak", FILTER_SANITIZE_SPECIAL_CHARS);
    $septemberpakta = filter_input(INPUT_POST,"septemberpakta", FILTER_SANITIZE_SPECIAL_CHARS);
    $septemberprb = filter_input(INPUT_POST,"septemberprb", FILTER_SANITIZE_SPECIAL_CHARS);
    $septemberkepatuhan = filter_input(INPUT_POST,"septemberkepatuhan", FILTER_SANITIZE_SPECIAL_CHARS);

    $oktober = "oktober";
    $oktoberiurbiaya = filter_input(INPUT_POST,"oktoberiurbiaya", FILTER_SANITIZE_SPECIAL_CHARS);
    $oktoberkessan = filter_input(INPUT_POST,"oktoberkessan");
    $oktoberantri = filter_input(INPUT_POST,"oktoberantri", FILTER_SANITIZE_SPECIAL_CHARS);
    $oktoberkontak = filter_input(INPUT_POST,"oktoberkontak", FILTER_SANITIZE_SPECIAL_CHARS);
    $oktoberpakta = filter_input(INPUT_POST,"oktoberpakta", FILTER_SANITIZE_SPECIAL_CHARS);
    $oktoberprb = filter_input(INPUT_POST,"oktoberprb", FILTER_SANITIZE_SPECIAL_CHARS);
    $oktoberkepatuhan = filter_input(INPUT_POST,"oktoberkepatuhan", FILTER_SANITIZE_SPECIAL_CHARS);

    $november = "november";
    $novemberiurbiaya = filter_input(INPUT_POST,"novemberiurbiaya", FILTER_SANITIZE_SPECIAL_CHARS);
    $novemberkessan = filter_input(INPUT_POST,"novemberkessan");
    $novemberantri = filter_input(INPUT_POST,"novemberantri", FILTER_SANITIZE_SPECIAL_CHARS);
    $novemberkontak = filter_input(INPUT_POST,"novemberkontak", FILTER_SANITIZE_SPECIAL_CHARS);
    $novemberpakta = filter_input(INPUT_POST,"novemberpakta", FILTER_SANITIZE_SPECIAL_CHARS);
    $novemberprb = filter_input(INPUT_POST,"novemberprb", FILTER_SANITIZE_SPECIAL_CHARS);
    $novemberkepatuhan = filter_input(INPUT_POST,"novemberkepatuhan", FILTER_SANITIZE_SPECIAL_CHARS);

    $desember = "desember";
    $desemberiurbiaya = filter_input(INPUT_POST,"desemberiurbiaya", FILTER_SANITIZE_SPECIAL_CHARS);
    $desemberkessan = filter_input(INPUT_POST,"desemberkessan");
    $desemberantri = filter_input(INPUT_POST,"desemberantri", FILTER_SANITIZE_SPECIAL_CHARS);
    $desemberkontak = filter_input(INPUT_POST,"desemberkontak", FILTER_SANITIZE_SPECIAL_CHARS);
    $desemberpakta = filter_input(INPUT_POST,"desemberpakta", FILTER_SANITIZE_SPECIAL_CHARS);
    $desemberprb = filter_input(INPUT_POST,"desemberprb", FILTER_SANITIZE_SPECIAL_CHARS);
    $desemberkepatuhan = filter_input(INPUT_POST,"desemberkepatuhan", FILTER_SANITIZE_SPECIAL_CHARS);



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


 
    $sql = "INSERT INTO tahunan (fktp_id, tahunan_tahun, tahunan_bulan, tahunan_iurbiaya, tahunan_kessan, tahunan_antrionline, tahunan_kontaktdklangsung, tahunan_paktaintegritas, tahunan_prb, tahunan_kepatuhan)
            VALUES ('$fktp', '$tahun', '$januari', '$januariiurbiaya', '$januarikessan', '$januariantri', '$januarikontak', '$januaripakta', '$januariprb', '$januarikepatuhan' )";

            mysqli_query($conn, $sql);
    
    $sql2 = "INSERT INTO tahunan (fktp_id, tahunan_tahun, tahunan_bulan, tahunan_iurbiaya, tahunan_kessan, tahunan_antrionline, tahunan_kontaktdklangsung, tahunan_paktaintegritas, tahunan_prb, tahunan_kepatuhan)
            VALUES ('$fktp', '$tahun', '$februari', '$februariiurbiaya', '$februarikessan', '$februariantri', '$februarikontak', '$februaripakta', '$februariprb', '$februarikepatuhan' )";

            mysqli_query($conn, $sql2);

    $sqlmaret = "INSERT INTO tahunan (fktp_id, tahunan_tahun, tahunan_bulan, tahunan_iurbiaya, tahunan_kessan, tahunan_antrionline, tahunan_kontaktdklangsung, tahunan_paktaintegritas, tahunan_prb, tahunan_kepatuhan)
            VALUES ('$fktp', '$tahun', '$maret', '$maretiurbiaya', '$maretkessan', '$maretantri', '$maretkontak', '$maretpakta', '$maretprb', '$maretkepatuhan' )";

            mysqli_query($conn, $sqlmaret);

    $sqlapril = "INSERT INTO tahunan (fktp_id, tahunan_tahun, tahunan_bulan, tahunan_iurbiaya, tahunan_kessan, tahunan_antrionline, tahunan_kontaktdklangsung, tahunan_paktaintegritas, tahunan_prb, tahunan_kepatuhan)
            VALUES ('$fktp', '$tahun', '$april', '$apriliurbiaya', '$aprilkessan', '$aprilantri', '$aprilkontak', '$aprilpakta', '$aprilprb', '$aprilkepatuhan' )";

            mysqli_query($conn, $sqlapril);

    $sqlmei = "INSERT INTO tahunan (fktp_id, tahunan_tahun, tahunan_bulan, tahunan_iurbiaya, tahunan_kessan, tahunan_antrionline, tahunan_kontaktdklangsung, tahunan_paktaintegritas, tahunan_prb, tahunan_kepatuhan)
            VALUES ('$fktp', '$tahun', '$mei', '$meiiurbiaya', '$meikessan', '$meiantri', '$meikontak', '$meipakta', '$meiprb', '$meikepatuhan' )";

            mysqli_query($conn, $sqlmei);

    $sqljuni = "INSERT INTO tahunan (fktp_id, tahunan_tahun, tahunan_bulan, tahunan_iurbiaya, tahunan_kessan, tahunan_antrionline, tahunan_kontaktdklangsung, tahunan_paktaintegritas, tahunan_prb, tahunan_kepatuhan)
            VALUES ('$fktp', '$tahun', '$juni', '$juniiurbiaya', '$junikessan', '$juniantri', '$junikontak', '$junipakta', '$juniprb', '$junikepatuhan' )";

            mysqli_query($conn, $sqljuni);
        
    $sqljuli = "INSERT INTO tahunan (fktp_id, tahunan_tahun, tahunan_bulan, tahunan_iurbiaya, tahunan_kessan, tahunan_antrionline, tahunan_kontaktdklangsung, tahunan_paktaintegritas, tahunan_prb, tahunan_kepatuhan)
            VALUES ('$fktp', '$tahun', '$juli', '$juliiurbiaya', '$julikessan', '$juliantri', '$julikontak', '$julipakta', '$juliprb', '$julikepatuhan' )";

            mysqli_query($conn, $sqljuli);

    $sqlagustus = "INSERT INTO tahunan (fktp_id, tahunan_tahun, tahunan_bulan, tahunan_iurbiaya, tahunan_kessan, tahunan_antrionline, tahunan_kontaktdklangsung, tahunan_paktaintegritas, tahunan_prb, tahunan_kepatuhan)
            VALUES ('$fktp', '$tahun', '$agustus', '$agustusiurbiaya', '$agustuskessan', '$agustusantri', '$agustuskontak', '$agustuspakta', '$agustusprb', '$agustuskepatuhan' )";

            mysqli_query($conn, $sqlagustus);

    $sqlseptember = "INSERT INTO tahunan (fktp_id, tahunan_tahun, tahunan_bulan, tahunan_iurbiaya, tahunan_kessan, tahunan_antrionline, tahunan_kontaktdklangsung, tahunan_paktaintegritas, tahunan_prb, tahunan_kepatuhan)
            VALUES ('$fktp', '$tahun', '$september', '$septemberiurbiaya', '$septemberkessan', '$septemberantri', '$septemberkontak', '$septemberpakta', '$septemberprb', '$septemberkepatuhan' )";

            mysqli_query($conn, $sqlseptember);

    $sqloktober = "INSERT INTO tahunan (fktp_id, tahunan_tahun, tahunan_bulan, tahunan_iurbiaya, tahunan_kessan, tahunan_antrionline, tahunan_kontaktdklangsung, tahunan_paktaintegritas, tahunan_prb, tahunan_kepatuhan)
            VALUES ('$fktp', '$tahun', '$oktober', '$oktoberiurbiaya', '$oktoberkessan', '$oktoberantri', '$oktoberkontak', '$oktoberpakta', '$oktoberprb', '$oktoberkepatuhan' )";

            mysqli_query($conn, $sqloktober);

    $sqlnovember = "INSERT INTO tahunan (fktp_id, tahunan_tahun, tahunan_bulan, tahunan_iurbiaya, tahunan_kessan, tahunan_antrionline, tahunan_kontaktdklangsung, tahunan_paktaintegritas, tahunan_prb, tahunan_kepatuhan)
            VALUES ('$fktp', '$tahun', '$november', '$novemberiurbiaya', '$novemberkessan', '$novemberantri', '$novemberkontak', '$novemberpakta', '$novemberprb', '$novemberkepatuhan' )";

            mysqli_query($conn, $sqlnovember);

    $sqldesember = "INSERT INTO tahunan (fktp_id, tahunan_tahun, tahunan_bulan, tahunan_iurbiaya, tahunan_kessan, tahunan_antrionline, tahunan_kontaktdklangsung, tahunan_paktaintegritas, tahunan_prb, tahunan_kepatuhan)
            VALUES ('$fktp', '$tahun', '$desember', '$desemberiurbiaya', '$desemberkessan', '$desemberantri', '$desemberkontak', '$desemberpakta', '$desemberprb', '$desemberkepatuhan' )";

            mysqli_query($conn, $sqldesember);
    

            echo"Pendaftaran Berhasil";
    
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
        <button onclick="kembaliTabel()"> Kembali ke Tabel</button>
        <button onclick="kembaliDashboard()"> Kembali ke Dashboard</button>
    </body>
    </html>
    <script>
        function kembaliTabel(){
            location.href = "tahunanfktp.php"
        }

        function kembaliDashboard(){
            location.href = "kabag.php";
        }
    </script>
