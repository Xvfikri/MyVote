<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/voting.css">
</head>

<body style="background-image: url(Assets/Image/backgroundVoting.png);">
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

    <!-- end of navbar -->
    <div class="container">
        <div class="text">
            <h2>Ayo Vote Calon ketua Desa Ubrug!!! </h2>
        </div>
        <div class="row">
            <?php
            $i = 1;
            $rows = query("SELECT * FROM paslon");
            foreach ($rows as $row) {
                ?>
                <div class="col-<?= $i; ?>">
                    <div class="profile">
                        <img src="uploads/<?= $row['foto_paslon'] ?>">
                        <h3>
                            <?= $row["nama_paslon"]; ?>
                        </h3>
                    </div>
                    <form action="function.php" method="post">
                        <input name="id_paslon" value="<?= $row['id_paslon']; ?>" hidden>
                        <button name="vote" type="submit" class="submit">VOTE</button>
                    </form>
                </div>
                <?php
                $i++;
            }
            ?>

        </div>

        <div class="textfott">
            <h4>Klik Vote untuk kandidat yang mau anda pilih, <br> suara anda tidak bisa diubah ketika <br>
                sudah konfirmasi klik vote salah satu kandidat</h4>
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