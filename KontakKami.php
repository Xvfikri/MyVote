<?php
require 'function.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Open+Sans:wght@300;400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="Assets/css/KontakKami.css">
</head>`

<body style="background-image: url(Assets/Image/Bacground.jpg);">

    <!-- Navbar -->
    <header>
        <div class="wrapper">
            <nav>
                <div class="logo">
                    <a href="Index.php"><img src="Assets/Image/logo_myvote.svg" alt="My Vote" width="40px">My Vote</a>
                </div>
                <ul>

                    <li>
                        <a href="Index.php">Beranda</a>
                    </li>

                    <li>
                        <a href="Tentang.php">Tentang</a>
                    </li>

                    <li>
                        <a href="Fitur.php">Fitur</a>
                    </li>

                    <li>
                        <a href="Tutorial_Voting.php">Tutorial Voting</a>
                    </li>

                    <li>
                        <a href="KontakKami.php">Kontak Kami</a>
                    </li>
                    <div class="nav-2">
                        <li><a href="Sign-in.php">Sign-In</a></li>
                        <li><a href="Sign-up.php">Sign-Up</a></li>
                    </div>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Part of navbar  -->

    <div class="image">
        <img src="Assets/Image/AsetKontak.png" alt="">
    </div>

    <div class="container">
        <div class="left">
            <h2>Hubungi Kami</h2>
            <p>Jangan sungkan untuk menyampaikan kepada kami <br> kebutuhan Anda terkait pemenangan Calon PILKADES <br>
                menggunakan My Vote. Kami siap membantu Anda. </p>
            <h5>Our Contact</h5>
            <p>Phone & Whatsapp: 0857 2337 5324 <br> Email: My_vote@gmail.com <br>
                Instagram: @My_Vote <br> Twitter: My_Vote <br> Facebook: My_Vote</p>
        </div>

        <div class="right">
            <h2>Kirim Pesan Pada Kami</h2>
            <form method="post">
                <div class="main-user-info">
                    <div class="user-input-box">
                        <input type="text" id="name" name="username" placeholder="Masukan Nama">
                    </div>
                    <div class="user-input-box">
                        <input type="text" id="pilkades" name="pilkasdes" placeholder="PILKADES">
                    </div>
                </div>
                <textarea name="pesan" cols="30" rows="10" placeholder="Masukan Pesan Anda"></textarea>
                <div class="form-submit-btn">
                    <input type="submit" name="submit" value="Kirim Pesan">
                </div>
            </form>
        </div>
    </div>

    <Script src="Assets/script/main.js"></Script>

</body>

</html>