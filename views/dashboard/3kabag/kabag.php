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

    nav button[data-target="dashboard"] {
      color: #0076a1;
    }

    nav button[data-target="raport"] {
      color: #00a652;
    }

    nav button[data-target="tahunan"] {
      color: #a60000;
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

    /* Notification */
    .notification {
      display: flex;
      align-items: center;
      background-color: #f9f9f9;
      padding: 15px;
      border: 1px solid #ddd;
      border-radius: 5px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .notification img {
      width: 30px;
      height: 30px;
      margin-right: 10px;
    }

    .notification p {
      margin: 0;
      font-size: 16px;
    }

    /* Dropdown for selecting faskes */
    .dropdown {
      margin-top: 20px;
      padding: 10px;
      border-radius: 5px;
      background-color: #f4f4f4;
      border: 1px solid #ddd;
    }

    .dropdown select {
      padding: 10px;
      width: 100%;
      font-size: 16px;
    }

    .dropdown .report {
      margin-top: 20px;
    }

        #user-icon {
  position: relative;
  cursor: pointer;
  margin-right: 50px;
}
    #user-info-popup {
  position: absolute;
  top: 60px;
  right: 10px;
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
    <button class="menu" data-target="raport">Raport</button>
    <button class="menu" data-target="tahunan">Laporan Tahunan</button>
  </nav>

  <!-- Main Content -->
  <main>
    <!-- Dashboard Section -->
    <section id="dashboard" class="menu-content active" role="region" aria-labelledby="dashboard-title">
      <h2 id="dashboard-title">Dashboard</h2>
      <div class="notification">
        <img src="../../../img/notification.png" alt="Notification Icon">
        <p>Selamat siang, hasil penilaian sudah masuk. Silahkan lihat!</p>
      </div>
    </section>

    <!-- Raport Section -->
    <section id="raport" class="menu-content" role="region" aria-labelledby="raport-title">
      <h2 id="raport-title">Raport</h2>

      <br>
      <a class='btn btn-primary btn-sm' href='raporfkrtl.php'>FKRTL</a>
      <br>
      <br>
      <a class='btn btn-primary btn-sm' href='raporfktp.php'>FKTP</a>

      <br>
      <br>

      <div class="container my-5">
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
    <!-- Laporan Tahunan Section -->
    
    
    <section>
      <!-- Dropdown to select specific faskes -->
      <div class="dropdown" id="faskes-dropdown" style="display: none;">
        <label for="faskes-name">Pilih Faskes:</label>
        <select id="faskes-name"></select>
      </div>

      <!-- Annual Report Display -->
      <div class="report" id="annual-report" style="display: none;">
        <h3>Laporan Tahunan</h3>
        <p id="report-content">Pilih faskes untuk melihat laporan tahunan.</p>
      </div>
    </section>

    <section id="tahunan" class="menu-content" role="region" aria-labelledby="tahunan-title">
      <h2>Buat Laporan Tahunan</h2>
        <a class='btn btn-primary btn-sm' href='tahunanfkrtl.php'>FKRTL</a>
        <br>
        <br>
        <a class='btn btn-primary btn-sm' href='tahunanfktp.php'>FKTP</a>
        <br>
      <div>
        <h2>Lihat Laporan Tahunan</h2>
        <a class='btn btn-primary btn-sm' href='lihattahunanfkrtl.php'>FKRTL</a>
        <br>
        <br>
        <a class='btn btn-primary btn-sm' href='lihattahunanfktp.php'>FKTP</a>
        <br>
      </div>
    </section>

      
  </main>

  <script>
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

    // JavaScript for dynamically displaying faskes based on selected type
    const faskesTypeDropdown = document.getElementById("faskes-type");
    const faskesDropdown = document.getElementById("faskes-dropdown");
    const faskesNameDropdown = document.getElementById("faskes-name");
    const annualReport = document.getElementById("annual-report");
    const reportContent = document.getElementById("report-content");

    const faskesData = {
      fktp: ["Faskes A", "Faskes B", "Faskes C"],
      fktrl: ["Faskes X", "Faskes Y", "Faskes Z"]
    };

    faskesTypeDropdown.addEventListener("change", () => {
      const selectedType = faskesTypeDropdown.value;

      // Populate faskes names
      faskesNameDropdown.innerHTML = "";
      faskesData[selectedType].forEach((faskes) => {
        const option = document.createElement("option");
        option.value = faskes;
        option.textContent = faskes;
        faskesNameDropdown.appendChild(option);
      });

      // Show faskes dropdown
      faskesDropdown.style.display = "block";
      annualReport.style.display = "none";
    });

    faskesNameDropdown.addEventListener("change", () => {
      const selectedFaskes = faskesNameDropdown.value;

      // Display annual report for selected faskes
      reportContent.textContent = `Laporan tahunan untuk ${selectedFaskes}. Data laporan akan ditampilkan di sini.`;
      annualReport.style.display = "block";
    });

    
  </script>
</body>
</html>
