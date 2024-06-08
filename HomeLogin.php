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
    <link rel="stylesheet" href="Assets/css/HomeLogin.css">

</head>

<body style="background-image: url(Assets/Image/1.png);">
    <!-- Navbar -->
    <header>
        <div class="wrapper">
            <nav>
                <div class="logo">
                    <a href="HomePage.php"><img src="Assets/Image/logo_myvote.svg" width="40px">My Vote</a>
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
            <!-- End of Navbar -->
            <div class="hero-section">
                <img src="Assets/Image/AssetsHomeAfter.png" width="50%">
                <h2>SAUNG PORANG</h2>
                <p>Spot foto destinasi wisata desa Ubrug Saung porang Sukabumi - www.MyVote.com </p>

            </div>

        </div>
    </header>
    <!-- End of header -->

    <!-- Small Container -->
    <div class="small-container">
        <h1>DESA UBRUG</h1>

        <div class="row">

            <div class="left">
                <p>Desa ubrug adalah salah satu desa dikecamatan warungkiara, desa ubrug pemekaran dari desa induk
                    warungkiara, desa ubrug sebagai pintu gerbang ibukota kecamatan dari sebelah timur dan desa ubrug
                    berada
                    diwilayah IV Pelabuhan Ratu.</p>
                <h4>DATA MONOGRAFI DESA UBRUG</h4>
                <div class="data">
                    <h2>BIDANG PEMERINTAHAN</h2>
                    <h4>UMUM</h4>
                    <p>Luas Dan Batas Wilayah <br> Luas Desa/ Kelurahan : 555,25 Ha</p>
                    <h4>Batas-batas Wilayah</h4>
                    <p>Sebelah utara : Ledeng Saluran PLTA (Desa Tenjojaya). <br>
                        Sebelah Timur : Kali CiCatih (Desa CiManggu). <br>
                        Sebelah Timur : Kali CiCatih (Desa CiManggu). <br>
                        Sebelah Selatan : Kolam Renang Deri (Desa Sukaharja). <br>
                        Sebelah Barat : Kali CiCareuh (Desa Girijaya/Desa Damaraja).</p>
                    <h4>Kondisi Geografis</h4>
                    <p>Ketinggian Tanah Darat Dari Permukaan laut : 400 m. <br>
                        Banyaknya Curah Hujan :3,8 mm. <br>
                        Suhu Udara Rata-rata : 13-23 oC. <br>
                        Orbitasi ( Jarak Dari Pusat Pemerintahan Desa/Kelurahan). <br>
                        Jarak dari Pusat Kecamatan : 5 KM. <br>
                        Jarak dari Pusat Kabupaten : 26 KM. <br>
                        Jarak dari Provinsi : 122 KM</p>
                </div>

            </div>

            <div class="right">
                <img src="Assets/Image/AssetsHomeAfter2.png" alt="">
            </div>

        </div>
    </div>



    <section class="detail-sections">
        <div class="text">
            <p>A</p>
            <p>B</p>
            <p>C</p>
            <p>D</p>
        </div>
        <img src="Assets/Image/AssetsHomeAfter3.png" width="50%">
        <div class="text2">
            <h1>PENGINGAT</h1>
            <p>1. Pastikan Anda memeriksa profil kandidat dengan seksama sebelum memilih. <br>
                2. Jangan terburu-buru dalam memilih kandidat, luangkan waktu untuk mempertimbangkan setiap opsi dengan
                baik. <br>
                3. Jangan hanya memilih kandidat berdasarkan popularitasnya, tetapi pastikan Anda memilih kandidat yang
                memiliki visi dan misi yang sesuai dengan kebutuhan Anda. <br>
                4. Perhatikan juga catatan dan kinerja kandidat di masa lalu, baik dalam politik maupun kehidupan
                pribadi.
                <br>
                5. Jangan terpengaruh oleh propaganda atau hoaks yang tersebar di media sosial, pastikan Anda mencari
                sumber informasi yang terpercaya sebelum memilih kandidat. <br>
                6. Ingatlah bahwa Anda memiliki hak suara yang berharga, jangan sia-siakan kesempatan ini dengan memilih
                tanpa <br> pertimbangan yang matang.
            </p>
        </div>
    </section>

    <footer>
        <div class="wrapper">
            <div class="links-container">
                <div class="lefts">
                    <div class="logos">
                        <a href="#"><img src="Assets/Image/logo_myvote.svg" alt="" /></a>
                        <h2>MY VOTE</h2>
                    </div>

                    <p>
                        My Vote - Sistem Informasi Manajemen <br />
                        Pemenangan Calon Anggota ketua desa
                    </p>
                </div>
                <div class="links">
                    <h3>Resources</h3>

                    <ul>
                        <li><a href="HomePage.php">Beranda</a></li>
                        <li><a href="#">Tentang</a></li>
                        <li><a href="Fitur.php">Fitur</a></li>
                        <li><a href="Tutorial_Voting.php">Tutorial Voting</a></li>
                    </ul>
                </div>
                <div class="links">
                    <h3>Company</h3>

                    <ul>
                        <li><a href="KontakKami.php">Kontak Kami</a></li>
                    </ul>
                </div>
                <div class="links">
                    <h3>Contact Us</h3>
                    <ul>
                        <li>+6281122334455</li>
                    </ul>

                    <div class="social">
                        <p>@My_Vote</p>
                        <a href="#"><img src="https://img.icons8.com/fluency/48/null/facebook-new.png" /></a>
                        <a href="#"><img src="https://img.icons8.com/color/48/null/twitter-circled--v1.png" /></a>
                        <a href="#"><img src="https://img.icons8.com/cute-clipart/64/null/instagram-new.png"
                                width="50px" /></a>
                        <a href="#"><img src="https://img.icons8.com/color/48/null/whatsapp--v1.png" /></a>
                    </div>
                    <!-- <a href="#">www.My Vote.com</a> -->
                </div>
            </div>
            <div class="term">
                <p>Created By : </p>
                <img src="Assets/Image/LogoTRITeam.png" width="30px" height="30px">
            </div>

        </div>
    </footer>



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