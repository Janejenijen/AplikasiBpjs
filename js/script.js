document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.getElementById("loginForm");

    loginForm.addEventListener("submit", async (event) => {
        event.preventDefault();

        const email = document.getElementById("email").value;
        const password = document.getElementById("password").value;

        try {
            const response = await fetch("http://localhost:3000/login", {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({ email, password }),
            });

            const result = await response.json();

            if (result.success) {
                // Redirect berdasarkan role
                switch (result.role) {
                    case "admin":
                        window.location.href = "./views/dashboard/4admin/admin.php";
                        break;
                    case "pegawai":
                        window.location.href = "./views/dashboard/1pegawai/pegawai.html";
                        break;
                    case "faskes":
                        window.location.href = "./views/dashboard/2faskes/faskes.html";
                        break;
                    case "kabag":
                        window.location.href = "./views/dashboard/3kabag/kabag.php";
                        break;
                    default:
                        alert("Role pengguna tidak dikenali!");
                }
            } else {
                alert(result.message);
            }
        } catch (error) {
            console.error("Error:", error);
            alert("Terjadi kesalahan. Coba lagi nanti.");
        }
    });
});
