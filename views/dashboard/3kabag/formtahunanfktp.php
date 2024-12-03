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
        <title>Laporan Tahunan FKRTL</title>
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

        
        <div class="container my-5">
        <form action="simpanformfktp.php" method="post">    
            <label>Tahun</label>
            <input type="number" id="tahun" name="tahun" min="2000" max="9999">
        <input type="hidden" name="fktp" value="<?php echo $data;?>">
        <table id="example">
            <thead>
                <tr>
                    <th>Bulan</th>
                    <th>Iur Biaya</th>
                    <th>Kessan</th>
                    <th>Antri Online</th>
                    <th>Kontak Tidak Langsung</th>
                    <th>Pakta Integritas</th>
                    <th>PRB</th>
                    <th>Nilai Kepatuhan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td id="januari">Januari</td>
                    <td id="januariiurbiaya"><input type="text" id="januariiurbiayaid" name="januariiurbiaya" maxlength="25" value=""></td>
                    <td id="januarikessan"><input type="number" id="januarikessanid" name="januarikessan" min="0" max="100" value=""></td>
                    <td id="januariantri"><input type="number" id="januariantriid" name="januariantri" min="0" max="100" value=""></td>
                    <td id="januarikontak"><input type="number" id="januarikontakid" name="januarikontak" min="0" max="100" value=""></td>
                    <td id="januaripakta"><input type="number" id="januaripaktaid" name="januaripakta" min="0" max="100" value=""></td>
                    <td id="januariprb"><input type="number" id="januariprbid" name="januariprb" min="0" max="100" value=""></td>
                    <td id="januarikepatuhan"><input type="number" id="januarikepatuhanid" name="januarikepatuhan" min="0" max="100" value=""></td>
                </tr>
                <tr>
                    <td id="februari">Februari</td>
                    <td id="februariiurbiaya"><input type="text" id="februariiurbiayaid" name="februariiurbiaya" maxlength="25" value=""></td>
                    <td id="februarikessan"><input type="number" id="februarikessanid" name="februarikessan" min="0" max="100" value=""></td>
                    <td id="februariantri"><input type="number" id="februariantriid" name="februariantri" min="0" max="100" value=""></td>
                    <td id="februarikontak"><input type="number" id="februarikontakid" name="februarikontak" min="0" max="100" value=""></td>
                    <td id="februaripakta"><input type="number" id="februaripaktaid" name="februaripakta" min="0" max="100" value=""></td>
                    <td id="februariprb"><input type="number" id="februariprbid" name="februariprb" min="0" max="100" value=""></td>
                    <td id="februarikepatuhan"><input type="number" id="februarikepatuhanid" name="februarikepatuhan" min="0" max="100" value=""></td>
                </tr>
                <tr>
                    <td id="maret">Maret</td>
                    <td id="maretiurbiaya"><input type="text" id="maretiurbiayaid" name="maretiurbiaya" maxlength="25" value=""></td>
                    <td id="maretkessan"><input type="number" id="maretkessanid" name="maretkessan" min="0" max="100" value=""></td>
                    <td id="maretantri"><input type="number" id="maretantriid" name="maretantri" min="0" max="100" value=""></td>
                    <td id="maretkontak"><input type="number" id="maretkontakid" name="maretkontak" min="0" max="100" value=""></td>
                    <td id="maretpakta"><input type="number" id="maretpaktaid" name="maretpakta" min="0" max="100" value=""></td>
                    <td id="maretprb"><input type="number" id="maretprbid" name="maretprb" min="0" max="100" value=""></td>
                    <td id="maretkepatuhan"><input type="number" id="maretkepatuhanid" name="maretkepatuhan" min="0" max="100" value=""></td>
                </tr>
                <tr>
                    <td id="april">April</td>
                    <td id="apriliurbiaya"><input type="text" id="apriliurbiayaid" name="apriliurbiaya" maxlength="25" value=""></td>
                    <td id="aprilkessan"><input type="number" id="aprilkessanid" name="aprilkessan" min="0" max="100" value=""></td>
                    <td id="aprilantri"><input type="number" id="aprilantriid" name="aprilantri" min="0" max="100" value=""></td>
                    <td id="aprilkontak"><input type="number" id="aprilkontakid" name="aprilkontak" min="0" max="100" value=""></td>
                    <td id="aprilpakta"><input type="number" id="aprilpaktaid" name="aprilpakta" min="0" max="100" value=""></td>
                    <td id="aprilprb"><input type="number" id="aprilprbid" name="aprilprb" min="0" max="100" value=""></td>
                    <td id="aprilkepatuhan"><input type="number" id="aprilkepatuhanid" name="aprilkepatuhan" min="0" max="100" value=""></td>
                </tr>
                <tr>
                    <td id="mei">Mei</td>
                    <td id="meiiurbiaya"><input type="text" id="meiiurbiayaid" name="meiiurbiaya" maxlength="25" value=""></td>
                    <td id="meikessan"><input type="number" id="meikessanid" name="meikessan" min="0" max="100" value=""></td>
                    <td id="meiantri"><input type="number" id="meiantriid" name="meiantri" min="0" max="100" value=""></td>
                    <td id="meikontak"><input type="number" id="meikontakid" name="meikontak" min="0" max="100" value=""></td>
                    <td id="meipakta"><input type="number" id="meipaktaid" name="meipakta" min="0" max="100" value=""></td>
                    <td id="meiprb"><input type="number" id="meiprbid" name="meiprb" min="0" max="100" value=""></td>
                    <td id="meikepatuhan"><input type="number" id="meikepatuhanid" name="meikepatuhan" min="0" max="100" value=""></td>
                </tr>
                <tr>
                    <td id="juni">Juni</td>
                    <td id="juniiurbiaya"><input type="text" id="juniiurbiayaid" name="juniiurbiaya" maxlength="25" value=""></td>
                    <td id="junikessan"><input type="number" id="junikessanid" name="junikessan" min="0" max="100" value=""></td>
                    <td id="juniantri"><input type="number" id="juniantriid" name="juniantri" min="0" max="100" value=""></td>
                    <td id="junikontak"><input type="number" id="junikontakid" name="junikontak" min="0" max="100" value=""></td>
                    <td id="junipakta"><input type="number" id="junipaktaid" name="junipakta" min="0" max="100" value=""></td>
                    <td id="juniprb"><input type="number" id="juniprbid" name="juniprb" min="0" max="100" value=""></td>
                    <td id="junikepatuhan"><input type="number" id="junikepatuhanid" name="junikepatuhan" min="0" max="100" value=""></td>
                </tr>
                <tr>
                    <td id="juli">Juli</td>
                    <td id="juliiurbiaya"><input type="text" id="juliiurbiayaid" name="juliiurbiaya" maxlength="25" value=""></td>
                    <td id="julikessan"><input type="number" id="julikessanid" name="julikessan" min="0" max="100" value=""></td>
                    <td id="juliantri"><input type="number" id="juliantriid" name="juliantri" min="0" max="100" value=""></td>
                    <td id="julikontak"><input type="number" id="julikontakid" name="julikontak" min="0" max="100" value=""></td>
                    <td id="julipakta"><input type="number" id="julipaktaid" name="julipakta" min="0" max="100" value=""></td>
                    <td id="juliprb"><input type="number" id="juliprbid" name="juliprb" min="0" max="100" value=""></td>
                    <td id="julikepatuhan"><input type="number" id="julikepatuhanid" name="julikepatuhan" min="0" max="100" value=""></td>
                </tr>
                <tr>
                    <td id="agustus">Agustus</td>
                    <td id="agustusiurbiaya"><input type="text" id="agustusiurbiayaid" name="agustusiurbiaya" maxlength="25" value=""></td>
                    <td id="agustuskessan"><input type="number" id="agustuskessanid" name="agustuskessan" min="0" max="100" value=""></td>
                    <td id="agustusantri"><input type="number" id="agustusantriid" name="agustusantri" min="0" max="100" value=""></td>
                    <td id="agustuskontak"><input type="number" id="agustuskontakid" name="agustuskontak" min="0" max="100" value=""></td>
                    <td id="agustuspakta"><input type="number" id="agustuspaktaid" name="agustuspakta" min="0" max="100" value=""></td>
                    <td id="agustusprb"><input type="number" id="agustusprbid" name="agustusprb" min="0" max="100" value=""></td>
                    <td id="agustuskepatuhan"><input type="number" id="agustuskepatuhanid" name="agustuskepatuhan" min="0" max="100" value=""></td>
                </tr>
                <tr>
                    <td id="september">September</td>
                    <td id="septemberiurbiaya"><input type="text" id="septemberiurbiayaid" name="septemberiurbiaya" maxlength="25" value=""></td>
                    <td id="septemberkessan"><input type="number" id="septemberkessanid" name="septemberkessan" min="0" max="100" value=""></td>
                    <td id="septemberantri"><input type="number" id="septemberantriid" name="septemberantri" min="0" max="100" value=""></td>
                    <td id="septemberkontak"><input type="number" id="septemberkontakid" name="septemberkontak" min="0" max="100" value=""></td>
                    <td id="septemberpakta"><input type="number" id="septemberpaktaid" name="septemberpakta" min="0" max="100" value=""></td>
                    <td id="septemberprb"><input type="number" id="septemberprbid" name="septemberprb" min="0" max="100" value=""></td>
                    <td id="septemberkepatuhan"><input type="number" id="septemberkepatuhanid" name="septemberkepatuhan" min="0" max="100" value=""></td>
                </tr>
                <tr>
                    <td id="oktober">Oktober</td>
                    <td id="oktoberiurbiaya"><input type="text" id="oktoberiurbiayaid" name="oktoberiurbiaya" maxlength="25" value=""></td>
                    <td id="oktoberkessan"><input type="number" id="oktoberkessanid" name="oktoberkessan" min="0" max="100" value=""></td>
                    <td id="oktoberantri"><input type="number" id="oktoberantriid" name="oktoberantri" min="0" max="100" value=""></td>
                    <td id="oktoberkontak"><input type="number" id="oktoberkontakid" name="oktoberkontak" min="0" max="100" value=""></td>
                    <td id="oktoberpakta"><input type="number" id="oktoberpaktaid" name="oktoberpakta" min="0" max="100" value=""></td>
                    <td id="oktoberprb"><input type="number" id="oktoberprbid" name="oktoberprb" min="0" max="100" value=""></td>
                    <td id="oktoberkepatuhan"><input type="number" id="oktoberkepatuhanid" name="oktoberkepatuhan" min="0" max="100" value=""></td>
                </tr>
                <tr>
                    <td id="november">November</td>
                    <td id="novemberiurbiaya"><input type="text" id="novemberiurbiayaid" name="novemberiurbiaya" maxlength="25" value=""></td>
                    <td id="novemberkessan"><input type="number" id="novemberkessanid" name="novemberkessan" min="0" max="100" value=""></td>
                    <td id="novemberantri"><input type="number" id="novemberantriid" name="novemberantri" min="0" max="100" value=""></td>
                    <td id="novemberkontak"><input type="number" id="novemberkontakid" name="novemberkontak" min="0" max="100" value=""></td>
                    <td id="novemberpakta"><input type="number" id="novemberpaktaid" name="novemberpakta" min="0" max="100" value=""></td>
                    <td id="novemberprb"><input type="number" id="novemberprbid" name="novemberprb" min="0" max="100" value=""></td>
                    <td id="novemberkepatuhan"><input type="number" id="novemberkepatuhanid" name="novemberkepatuhan" min="0" max="100" value=""></td>
                </tr>
                <tr>
                    <td id="desember">Desember</td>
                    <td id="desemberiurbiaya"><input type="text" id="desemberiurbiayaid" name="desemberiurbiaya" maxlength="25" value=""></td>
                    <td id="desemberkessan"><input type="number" id="desemberkessanid" name="desemberkessan" min="0" max="100" value=""></td>
                    <td id="desemberantri"><input type="number" id="desemberantriid" name="desemberantri" min="0" max="100" value=""></td>
                    <td id="desemberkontak"><input type="number" id="desemberkontakid" name="desemberkontak" min="0" max="100" value=""></td>
                    <td id="desemberpakta"><input type="number" id="desemberpaktaid" name="desemberpakta" min="0" max="100" value=""></td>
                    <td id="desemberprb"><input type="number" id="desemberprbid" name="desemberprb" min="0" max="100" value=""></td>
                    <td id="desemberkepatuhan"><input type="number" id="desemberkepatuhanid" name="desemberkepatuhan" min="0" max="100" value=""></td>
                </tr>
            </tbody>

        </table>
        <button type="submit">Simpan Perubahan</button>
        </form>
           
        
        <div>
        <button onclick="kembali()">Kembali</button>
        </div> 

        <script>
            function kembali(){
                location.href = "tahunanfktp.php";
            }
        </script>
    </body>
    </html>
    