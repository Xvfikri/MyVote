<?php require "function.php"; ?>
<?php
$query = "SELECT * FROM paslon WHERE id_paslon = 1";
$result = mysqli_query($conn, $query);
$paslon1 = mysqli_fetch_assoc($result);

$query = "SELECT * FROM paslon WHERE id_paslon = 2";
$result = mysqli_query($conn, $query);
$paslon2 = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial-Voting</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/TentangCalon.css">
</head>

<body style="background-image: url(Assets/Image/backgroundSetelahLogin.png);">
    <!-- Navbar -->
    <header>
        <div class="wrapper">
            <nav>
                <div class="logo">
                    <a href="HomeLogin.php"><img src="Assets/Image/logo_myvote.svg" alt="My Vote" width="40px">My
                        Vote</a>
                </div>
                <ul>

                    <li>
                        <a href="HomeLogin.php">Home</a>
                    </li>

                    <li>
                        <a href="TentangCalon.php">Tentang Calon</a>
                    </li>

                    <li>
                        <a href="Voting.php">Voting</a>
                    </li>

                    <li>
                        <a href="HasilVoting.php">Hasil Voting</a>
                    </li>
                    <div class="profila">

                        <img src="Assets/Image/Isolation_Mode.png" class="user-pic" onclick="toggleMenu()">
                    </div>
                </ul>

                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="https://img.icons8.com/ios/50/null/user-male-circle--v1.png" />
                            <h3>Fikri Putra</h3>
                        </div>
                        <hr>

                        <!-- <a href="#" class="sub-menu-link">
                            <img src="https://img.icons8.com/ios/50/null/user-male-circle--v1.png" />
                            <p>Edit Profile</p>
                            <span>></span>
                        </a> -->
                        <a href="Pengaturan.php" class="sub-menu-link">
                            <img src="https://img.icons8.com/ios/50/null/advanced-search.png" />
                            <p>Setting</p>
                            <span>></span>
                        </a>
                        <!-- <a href="#" class="sub-menu-link">
                            <img src="https://img.icons8.com/ios/50/null/help--v1.png" />
                            <p>Help & Support</p>
                            <span>></span>
                        </a> -->
                        <a class="sub-menu-link" href="logout.php" role="button"
                            onclick="return confirm('yakin akan logout ?')">
                            <img src="https://img.icons8.com/ios/50/null/user-male-circle--v1.png" />
                            <p>Logout</p>
                            <span>></span>
                        </a>

                    </div>
                </div>

            </nav>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <div class="right">
                <div class="col">
                    <div class="profile1">
                        <img src="uploads/<?= $paslon1['foto_paslon'] ?>">
                        <h3>
                            <?= $paslon1['nama_paslon'] ?>
                        </h3>
                    </div>
                </div>
                <p>Visi:
                    <?= $paslon1['visi'] ?> <br> <br> Misi
                </p>
                <p>
                    <?= $paslon1['misi'] ?>
                </p>

            </div>

            <div class="left">
                <div class="col">
                    <div class="profile1">
                        <img src="uploads/<?= $paslon2['foto_paslon'] ?>">
                        <h3>
                            <?= $paslon2['nama_paslon'] ?>
                        </h3>
                    </div>
                </div>
                <p>Visi</p>

                <p>
                    <?= $paslon2['visi'] ?>
                </p>
                <p>Misi <br>
                    <?= $paslon2['misi'] ?>
                    <br>
                </p>
            </div>
        </div>
    </div>


    <script src="Assets/script/main.js"></script>
    <script>
        let subMenu = document.getElementById("subMenu")

        function toggleMenu() {
            subMenu.classList.toggle("open-menu")
        }

        var menuList = document.getElementById("menuList");
        menuList.style.maxHeight = "0px";

        function togglemenu() {
            if (menuList.style.maxHeight == "0px") {
                menuList.style.maxHeight = "130px";
            } else {
                menuList.style.maxHeight = "0px";
            }
        }
    </script>

</body>

</html>