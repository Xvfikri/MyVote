<?php

// conn
include "db_Connect.php";

if (isset($_POST["vote"])) {
    $id = $_POST["id_paslon"];

}

// fungsi ambil data dari table
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}



// Daftar
function register($infologin)
{
    global $conn;

    $username = htmlspecialchars(stripcslashes($infologin["username"]));
    $no_nik = mysqli_real_escape_string($conn, $infologin["no_nik"]);
    $numb = mysqli_real_escape_string($conn, $infologin["number"]);
    $password = mysqli_real_escape_string($conn, $infologin["password"]);
    $cpassword = mysqli_real_escape_string($conn, $infologin["cpassword"]);
    $status = mysqli_real_escape_string($conn, $infologin["status"]);
    $cek = mysqli_query($conn, "SELECT no_nik FROM user WHERE no_nik = '$no_nik'");

    if (mysqli_num_rows($cek) > 0) {
        echo "<script>alert('Username sudah ada !');</script>";
        return false;
    }


    if ($password !== $cpassword) {
        echo "<script>alert('Password tidak sama !');</script>";
        return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);

    $query = mysqli_query($conn, "INSERT INTO user (username, no_nik, no_handphone, password, status) VALUES ('$username', '$no_nik','$numb', '$password', '$status') ");

    return mysqli_affected_rows($conn);

}


// Login
function ceklogin($datalogin) {
    global $conn;
    $no_nik = $datalogin["no_nik"];
    $password = $datalogin["password"];
    $cekuser = mysqli_query($conn, "SELECT * FROM user WHERE no_nik='$no_nik'");
    if (mysqli_num_rows($cekuser) === 1) {
        $hasil = mysqli_fetch_assoc($cekuser);
        if (password_verify($password, $hasil["password"])) {
            $_SESSION["user"] = $no_nik;
            $_SESSION["login"] = true;
            if (isset($datalogin["rememberme"])) {
                setcookie("login", "tetap_ingat", time() + 30);
            }
            if ($hasil["status"] == 'admin') {
                echo "<script>
						alert('Anda berhasil login!');
						document.location.href='Admin_dashboard.php';
						</script>";
            } else {
                echo "<script>
						alert('Anda berhasil login!');
						document.location.href='HomeLogin.php';
						</script>";
            }
        }
    } else {
        echo "<script>
				alert('Akun tidak ada');
				document.location.href='Sign-up.php';
				</script>";
    }
}

// Vote
if (isset($_POST['vote'])) {
    $id_paslon = $_POST['id_paslon'];
    $query = "SELECT * FROM paslon WHERE id_paslon = $id_paslon";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $jumlah_vote = $row['vote'];
    $jumlah_vote++;
    $query = "UPDATE paslon SET vote = $jumlah_vote WHERE id_paslon = $id_paslon";
    $result = mysqli_query($conn, $query);
    if (mysqli_affected_rows($conn) > 0) {
        echo "
        <script>
            alert('Vote berhasil');
            window.location.href='HasilVoting.php';
        </script>
        ";
    }
}

// Kirim Pesan

if (isset($_POST['pesan'])) {
    $username = $_POST['username'];
    $pesan = $_POST['pesan'];

    $insert = mysqli_query($conn, "INSERT INTO pesan (username,pesan) values ('$username','$pesan')");
    if ($insert) {
        //if insert 
        echo '
        <script>
            alert("pesan berhasil dikirim");
        </script>
        ';
    } else {
        // if failed
        echo '
    <script>
            alert("pesan gagal dikirim");
            window.location.href="KontakKami.php";
        </script>
        ';
    }
}

// Cek Nik Sebelum Reset Password

if (isset($_POST['cekNik'])) {
    $no_nik = $_POST['no_nik'];
    // Check if the NIK KTP exists in the database
    $query = mysqli_query($conn, "SELECT * FROM user WHERE no_nik = '$no_nik'");
    $hitung = mysqli_num_rows($query);    
    if ($hitung>0) {
        echo '
        <script>
            alert("NO NIK KTP Terdaftar");
            window.location.href="ResetPassword.php";
        </script>
        ';
    } else {
        echo '
        <script>
            alert("NO NIK KTP Tidak Terdaftar!");
        </script>
        ';
    }
}

//ubah password
if (isset($_POST['update'])){
    $no_nik=$_POST['no_nik'];
    $password=$_POST['password'];
    $password = password_hash($password, PASSWORD_DEFAULT);
    $query="UPDATE user SET password='$password' where no_nik='$no_nik'";
    $update= $conn->query($query);
    if($update==true){
        echo '
        <script>
            alert("Password Berhasil Diperbaharui");
            window.location.href="Sign-in.php";
        </script>
        ';
    }
}





?>


