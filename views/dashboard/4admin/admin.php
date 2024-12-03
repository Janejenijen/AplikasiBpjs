<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <style>
    /* General Styling */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    /* Top Bar */
    header {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 50px;
      background-color: #fff;
      color: black;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      z-index: 1000;
    }

    header #top-bar-icons {
      display: flex;
      margin-right: 50px;
    }

    header .icon {
      width: 30px;
      height: 30px;
      cursor: pointer;
    }

    /* Sidebar */
    nav {
      position: fixed;
      top: 50px;
      left: 0;
      width: 200px;
      height: calc(100vh - 50px);
      background-color: #f4f4f4;
      padding: 10px;
      box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
      z-index: 999;
    }

    nav button {
      width: 100%;
      margin: 10px 0;
      padding: 10px;
      background: none;
      border: none;
      text-align: left;
      cursor: pointer;
      font-size: 16px;
      font-weight: bold;
    }

    nav button:hover {
      background-color: #ddd;
    }

    /* Main Content */
    main {
      margin-left: 200px;
      margin-top: 50px;
      padding: 20px;
    }

    .menu-content {
      display: none;
    }

    .menu-content.active {
      display: block;
    }
    #user-icon {
  position: relative;
  cursor: pointer;
  margin-right: 50px;
}
    #user-info-popup {
  position: absolute;
  top: 60px;
  right: 0;
  background-color: white;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  padding: 10px;
  width: 250px;
  display: none;
  z-index: 1000;
}

#user-info-popup p {
  margin: 5px 0;
}

#user-info-popup p strong {
  font-weight: bold;
}

#logout-button {
  margin-top: 10px;
  padding: 8px 12px;
  background-color: #f44336;
  color: white;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  font-size: 14px;
}

#logout-button:hover {
  background-color: #d32f2f;
}
  </style>
</head>
<body>
  <!-- Header -->
  <header>
    <h1 id="welcome-message">Selamat datang, Janehfers</h1>
    <div id="top-bar-icons">
      <img src="../../../img/user.png" alt="User Icon" class="icon">
      <div id="user-info-popup" class="hidden">
            <p><strong>Nama:</strong> <span id="user-name"></span></p>
            <p><strong>Role:</strong> <span id="user-role"></span></p>
            <p>
              <strong>Waktu Login:</strong> <span id="user-login-time"></span>
            </p>
            <button id="logout-button" class="logout-button">Logout</button>
          </div>
    </div>
  </header>

  <!-- Sidebar -->
  <nav>
    <button class="menu" data-target="dashboard">Dashboard</button>
    <button class="menu" data-target="pengguna">Edit Data Pengguna</button>
    <button class="menu" data-target="edit-report">Edit Data Laporan</button>
    <button class="menu" data-target="edit-faskes">Edit Data Faskes</button>
  </nav>

  <!-- Main Content -->
  <main>
    <!-- Dashboard Section -->
    <section id="dashboard" class="menu-content active" role="region" aria-labelledby="dashboard-title">
      <h2 id="dashboard-title">Dashboard</h2>
      <p>Selamat datang di Dashboard. Gunakan menu di sebelah kiri untuk navigasi.</p>
    </section>

    <!-- User Section -->
    <section id="pengguna" class="menu-content" role="region" aria-labelledby="pengguna-title">
      <h2 id="pengguna-title">Data Pengguna</h2>

      <button onclick="tambahpengguna()"> Tambah Pengguna</button>
      <!-- Tambah Data Pengguna Section -->
       <div id="edit-user" class="menu-content" role="region" aria-labelledby="edit-user-title">
          <h2 id="edit-user-title">Tambah Pengguna</h2>

          <form action="daftarpengguna.php" method="post">

            <div>
              <label for="tipe-pengguna">Tipe Pengguna</label>
              <select id="role" name="role">
                <option value="pegawai">Pegawai</option>
                <option value="faskes">Faskes</option>
              </select>
            </div>

            <br>
            <div>
              <label for="username">Email Pengguna:</label>
              <input type="text" id="email" name="email" placeholder="Masukkan nama pengguna" required>
            </div>
            
            <br>
            <div>
              <label for="pass">Password:</label>
              <input type="password" id="password" name="password" maxlength="20" required>
            </div>
            
            <br>
            <br>
            <button type="submit">Simpan Perubahan</button>
          </form>
        </div>

        <!-- Table Pengguna -->
         <div class="container my-5">

            <table class="table">
              <thead>
                <th>ID Pengguna</th>
                <th>Nama Pengguna</th>
                <th>Tipe Pengguna</th>
                <th>Action</th>
              </thead>
              <tbody>
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

                //Baca Row
                $sql = "SELECT * FROM users WHERE role = 'pegawai' OR role = 'faskes'";
                $result = $conn->query($sql);

                if(!$result){
                  die("Invalid query: " . $conn->error);
                }

                //Baca Data
                while($row = $result->fetch_assoc()){
                  echo "
                  <tr>
                    <td>$row[user_id]</td>
                    <td>$row[email]</td>
                    <td>$row[role]</td>
                    <td>
                      <a class='btn btn-primary btn-sm' href='editpengguna.php?user_id=$row[user_id]'>Edit</a>
                    </td>
                  </tr>
                  ";
                }

                mysqli_close($conn)
                ?>
              </tbody>
            </table>
                
         </div>
                
    </section>

    <!-- Edit Data Laporan Section -->
    <section id="edit-report" class="menu-content" role="region" aria-labelledby="edit-report-title">
    <div class="container my-5">
        <h2>Data Rapor</h2>
        <table class="table">
          <thead>
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
          </thead>
          <tbody>
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

                //Baca Row
                $sql = "SELECT * FROM rapor";
                $result = $conn->query($sql);

                if(!$result){
                die("Invalid query: " . $conn->error);
                }

                //Baca Data
                while($row = $result->fetch_assoc()){
                echo "
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
                ";
              }

              mysqli_close($conn)
              ?>
            </tbody>
        </table>
      </div>
    </section>

    <!-- Edit Data Faskes Section -->
    <section id="edit-faskes" class="menu-content" role="region" aria-labelledby="edit-faskes-title">
      <h2 id="edit-faskes-title">Data Faskes</h2>
      
      <!-- Button Tambah Faskes -->
      <button onclick="tambahfaskes()"> Tambah Faskes</button>
        <div id="pilih-tipefaskes" class="menu-content" role="region" aria-labelledby="tambah-faskes-title">
          <h2 id="tambah-faskes-title">Tambah Faskes</h2>

          <!-- Opsi Pilih Tipe Faskes -->
          <label for="tipe-faskes-label">Tipe Faskes</label>
          <select id="tipe-faskes" name="tipe-faskes" onchange="pilih_faskes(this.value);">
            <option value="fktp">FKTP</option>
            <option value="fkrtl">FKRTL</option>
          </select> 
          
          <!-- Form FKTP -->
          <div id="tipefktp" style="display: block;" class="menu-fktp" role="region" aria-labelledby="faskes-tipefktp">
            <form action="daftarfktp.php" method="post">
              <br>
              
              <div>
                <label for="kodefktp">Kode FKTP:</label>
                <input type="number" id="kodefktp" name="kodefktp" min="0" max="99999999" required>
              </div>
              <br>

              <div>
                <label for="namafktp">Nama FKTP:</label>
                <input type="text" id="namafktp" name="namafktp" placeholder="LAPANGO" maxlength="100" required>
              </div>
              <br>
              
              <div>
                <label for="jenisfktp">Jenis FKTP:</label>
                <input type="text" id="jenisfktp" name="jenisfktp" placeholder="PUSKESMAS" maxlength="100" required>
              </div>
              <br>

              <div>
                <label for="kantorcabangfktp">Kantor Cabang FKTP:</label>
                <input type="text" id="kantorcabangfktp" name="kantorcabangfktp" placeholder="MANADO" maxlength="100" required>
              </div>
              <br>

              <div>
                <label for="kabupatenkotafktp">Kabupaten / Kota FKTP:</label>
                <input type="text" id="kabupatenkotafktp" name="kabupatenkotafktp" placeholder="KAB. KEPL. SANGIHE" maxlength="100" required>
              </div>
              <br>

              <div>
                <label for="kepwilfktp">Kedeputian Wilayah FKTP:</label>
                <input type="text" id="kepwilfktp" name="kepwilfktp" placeholder="SULUT, SULTENG, GORONTALO DAN MALUT" maxlength="255" required>
              </div>
              <br>

              <div>
                <label for="kodekepwilfktp">Kode Kepwil:</label>
                <input type="number" id="kodekepwilfktp" name="kodekepwilfktp" min="0" max="999" required>
              </div>
              <br>

              <br>
              <button type="submit">Simpan Perubahan</button>
            </form>
          </div>

          <!-- Form FKRTL -->
          <div id="tipefkrtl" style="display: none;" class="menu-fkrtl" role="region" aria-labelledby="faskes-tipefkrtl">
            <form action="daftarfkrtl.php" method="post">
              <br>

              <div>
                <label for="kodefkrtl">Kode FKRTL:</label>
                <input type="number" id="kodefkrtl" name="kodefkrtl" min="0" max="99999999" required>
              </div>
              <br>

              <div>
                <label for="namafkrtl">Nama FKRTL:</label>
                <input type="text" id="namafkrtl" name="namafkrtl" placeholder="Nama FKRTL" maxlength="255" required>
              </div>
              <br>

              <br>
              <button type="submit">Simpan Perubahan</button>
            </form>
          </div>

        </div>
        
  <!-- Table FKRTL -->
  <div class="container my-5">
  <h3>Data FKRTL</h3>
  <table class="table">
    <thead>
     <th>ID</th>
     <th>Kode</th>
     <th>Nama</th>
     <th>Action</th>
    </thead>
    <tbody>
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

      //Baca Row
      $sql = "SELECT * FROM fkrtl";
      $result = $conn->query($sql);

      if(!$result){
       die("Invalid query: " . $conn->error);
      }

      //Baca Data
      while($row = $result->fetch_assoc()){
       echo "
       <tr>
         <td>$row[fkrtl_id]</td>
         <td>$row[fkrtl_kode]</td>
         <td>$row[fkrtl_nama]</td>
         <td>
            <a class='btn btn-primary btn-sm' href='editfkrtl.php?fkrtl_id=$row[fkrtl_id]'>Edit</a>
         </td>
       </tr>
      ";
    }

    mysqli_close($conn)
    ?>
   </tbody>
   </table>
   </div>
    <br>
    <br>
<!-- Tabel FKTP -->
<div class="container my-5">
  <h3>Data FKTP</h3>
  <table class="table">
    <thead>
     <th>ID</th>
     <th>Kode Kedeputian Wilayah</th>
     <th>Kedeputian Wilayah</th>
     <th>Kantor Cabang</th>
     <th>Kota / Kabupaten</th>
     <th>Kode</th>
     <th>Nama</th>
     <th>Jenis</th>
     <th>Action</th>
    </thead>
    <tbody>
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

      //Baca Row
      $sql = "SELECT * FROM fktp";
      $result = $conn->query($sql);

      if(!$result){
       die("Invalid query: " . $conn->error);
      }

      //Baca Data
      while($row = $result->fetch_assoc()){
       echo "
       <tr>
         <td>$row[fktp_id]</td>
         <td>$row[fktp_kodekepwil]</td>
         <td>$row[fktp_kepwil]</td>
         <td>$row[fktp_cabang]</td>
         <td>$row[fktp_daerah]</td>
         <td>$row[fktp_kode]</td>
         <td>$row[fktp_nama]</td>
         <td>$row[fktp_jenis]</td>
         <td>
            <a class='btn btn-primary btn-sm' href='editfktp.php?fktp_id=$row[fktp_id]'>Edit</a>
         </td>
       </tr>
      ";
    }

    mysqli_close($conn)
    ?>
   </tbody>
   </table>
   </div>
    </section>  

  </main>

  <script>
    // JavaScript for toggling between sections
    document.querySelectorAll(".menu").forEach((button) => {
      button.addEventListener("click", () => {
        // Hide all sections
        document.querySelectorAll(".menu-content").forEach((section) => {
          section.classList.remove("active");
        });

        // Show the target section
        const target = button.getAttribute("data-target");
        document.getElementById(target).classList.add("active");
      });
    });

    //Button Tambah Pengguna
    var form_user = document.getElementById('edit-user');
    var displayform_user = 1
    function tambahpengguna()
    {
      if(displayform_user == 1){
        form_user.style.display = 'block';
        displayform_user = 0;
      }
      else{
        form_user.style.display = 'none';
        displayform_user = 1;
      }
    }

    //Button Tambah Faskes
    var form_faskes = document.getElementById('pilih-tipefaskes');
    var displayform_faskes = 1;

    function tambahfaskes(){
      if(displayform_faskes == 1){
        form_faskes.style.display = 'block';
        displayform_faskes = 0;
      }
      else{
        form_faskes.style.display = 'none';
        displayform_faskes = 1;
      }
    }

    //Pilih faskes FKTP ato FKRTL    
    function pilih_faskes(value){
      if (value == "fkrtl"){
        document.getElementById('tipefkrtl').style.display="block";
        document.getElementById('tipefktp').style.display="none";
      }
      if (value =="fktp"){
        document.getElementById('tipefkrtl').style.display="none";
        document.getElementById('tipefktp').style.display="block";
      }
    }
  
    const userIcon = document.querySelector(".icon");
        const userInfoPopup = document.getElementById("user-info-popup");
        const userName = document.getElementById("user-name");
        const userRole = document.getElementById("user-role");
        const userLoginTime = document.getElementById("user-login-time");

        // Ambil data pengguna dari backend
        

        // Tampilkan atau sembunyikan popup saat ikon ditekan
        userIcon.addEventListener("click", () => {
          if (userInfoPopup.style.display === "block") {
            userInfoPopup.style.display = "none";
          } else {
            userInfoPopup.style.display = "block";
           // Ambil data saat popup ditampilkan
          }
        });

        // Logout user
        const logoutButton = document.getElementById("logout-button");
        logoutButton.addEventListener("click", async () => {
          alert("Anda berhasil logout!");
          window.location.href = "../../../index.html"; // Redirect ke halaman login
        });

        // Sembunyikan popup saat mengklik di luar area
        document.addEventListener("click", (e) => {
          if (
            !userIcon.contains(e.target) &&
            !userInfoPopup.contains(e.target)
          ) {
            userInfoPopup.style.display = "none";
          }
        });
  
    
  </script>
</body>
</html>
