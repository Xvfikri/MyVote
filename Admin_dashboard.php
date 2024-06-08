<?php
session_start();
if (isset($_COOKIE["login"])) {

    if ($_COOKIE["login"] == "true") {
        $_SESSION["login"] = true;
    }
}

if (!isset($_SESSION["login"])) {

    echo "<script>alert('Ilegal akses!');
		document.location.href='Sign-in.php';</script>";
    die;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin MyVote</title>
    <!-- ======= Styles ====== -->
    <link rel="stylesheet" href="Assets/css/dashboard.css">
</head>

<body>
    <!-- =============== Navigation ================ -->
    <div class="container">
        <div class="navigation">
            <ul>
                <li>
                    <div class="logo">
                        <a href="dashboard.php"><img src="Assets/Image/logo_myvote.svg" alt="">MyVote</a>
                    </div>
                </li>

                <li>
                    <a href="Admin_dashboard.php">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>



                <li>
                    <a href="Admin_inbox.php">
                        <span class="icon">
                            <ion-icon name="chatbubble-outline"></ion-icon>
                        </span>
                        <span class="title">Inbox</span>
                    </a>
                </li>

                <li>
                    <a class="sub-menu-link" href="logout.php" role="button"
                        onclick="return confirm('yakin akan logout ?')">
                        <span class="icon">
                            <ion-icon name="log-out-outline"></ion-icon>
                        </span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- ========================= Main ==================== -->
        <div class="main">

            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>

                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                <div class="user">
                    <img src="Assets/Image/Isolation_Mode.png" class="user-pic" onclick="toggleMenu()">
                </div>
            </div>


            <div class="small-container">
                <div class="bg">
                    <img src="Assets/Image/asetadmin.png" alt="">
                </div>

                <div class="box">
                  
                    <form action="upload.php" method="POST" enctype="multipart/form-data">
                        <div class="input-name">
                            <input type="text" name="name" placeholder="Masukan Nama Calon Kandidat disini :">
                        </div>
                        <div class="binput">
                            <div class="input-box1">
                                <textarea name="visi" cols="30" rows="22" placeholder="Masukan visi :"></textarea>
                            </div>
                            <div class="input-box1">
                                <textarea name="misi" cols="30" rows="22" placeholder="Masukan misi :"></textarea>
                            </div>
                        </div>
                        <div class="input-box">
                            <input type="file" name="my_image">
                        </div>
                        <div class="form-submit-btn">
                            <input type="submit" name="submit" value="Upload">
                        </div>

                    </form>
                </div>


            </div>
            <div class="bg2">
                <img src="Assets/Image/asetadmin2.png" alt="">
            </div>
        </div>

    </div>

    <!-- =========== Scripts =========  -->
    <script src="Assets/script/admin.js"></script>

    <!-- ====== ionicons ======= -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>