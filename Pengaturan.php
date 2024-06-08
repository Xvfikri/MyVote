<?php
session_start();
if (isset($_COOKIE["login"])) {

    if ($_COOKIE["login"] == "true") {
        $_SESSION["login"] = true;
    }
}

if (!isset($_SESSION["login"])) {
    echo "<script>alert('Ilegal akses!');
		document.location.href='Index.php';</script>";
    die;
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengaturan</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/pengaturan.css">
</head>

<body style="background-image: url(Assets/Image/Background_Pengaturan.png);">
    <header>
        <div class="wrapper">
            <nav>
                <div class="logo">
                    <a href="HomeLogin.php"><img src="Assets/Image/logo_myvote.svg" alt="My Vote" width="40px">My
                        Vote</a>
                </div>
                <div class="profila">

                    <img src="Assets/Image/Isolation_Mode.png" class="user-pic" onclick="toggleMenu()">
                </div>

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
            <div class="col-1">
                <img src="Assets/Image/asetPengaturan.png" width="80%">
            </div>

            <div class="col2">
                <div class="profile">
                    <div class="img">
                        <img src="Assets/Image/profile.svg" alt="">
                    </div>
                    <p>32020********** <br> Adzka</p>
                </div>
                <div class="log-out" id="open">
                    <img src="Assets/Image/PowerLogout.png" alt="">
                    <p>Log-out</p>
                </div>
            </div>
        </div>
        <div class="model-container" style="background-image: url(Assets/Image/Logout.png);">
            <div class="model">
                <?php
                session_start();
                if (isset($_COOKIE["login"])) {

                    if ($_COOKIE["login"] == "true") {
                        $_SESSION["login"] = true;
                    }
                }

                if (!isset($_SESSION["login"])) {
                    echo "<script>alert('Ilegal akses!');
		                    document.location.href='Index.php';</script>";
                    die;
                }
                ?>
                <div class="log">
                    <img src="Assets/Image/logo_myvote.svg" alt="">
                </div>
                <h1>My Vote</h1>
                <div class="logout">
                    <a class="btn btn-primary mt-4" href="logout.php" role="button"
                        onclick="return confirm('yakin akan logout ?')"><button>LogOut</button></a>
                </div>
                <div class="close">
                    <button id="close">Cancel</button>
                </div>
            </div>
        </div>


        <div class="footer">

            <div class="fott">
                <div class="logo">
                    <a href="HomeLogin.php"><img src="Assets/Image/logo_myvote.svg" alt="My Vote">My Vote</a>
                </div>
                <div class="right">
                    <p>Copyright © 2023 My Vote Company S.L. All rights reserved.</p>
                </div>
            </div>
            <div class="bottom">
                <li><a href="#">Terms & conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">All rights reserved</a></li>
                <li><a href="#">Cookies Policy</a></li>
            </div>

        </div>

    </div>
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

    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function () {
            var openButton = document.getElementById('open');
            var modelContainer = document.querySelector('.model-container');

            openButton.addEventListener('click', function () {
                modelContainer.style.transform = 'scale(1)';
            });

            var openButton = document.getElementById('close');
            var modelContainer = document.querySelector('.model-container');

            openButton.addEventListener('click', function () {
                modelContainer.style.transform = 'scale(0)';
            });


        });
    </script>
</body>

</html>