<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-In</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;0,700;1,600&family=Open+Sans:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="Assets/css/ResetPassword.css">
</head>

<body style="background-image: url(Assets/Image/Background_Login.png);">
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
    <!-- End of Navbar -->
    <div class="hero-section">
        <div class="right">
            <h1>BUATLAH PASSWORD BARU</h1>
            <p>Buatlah password baru untuk bisa <br> melanjutkan anda di tahap Sign-In </p>
            <img src="Assets/Image/ForgotPasword.png" alt="">
        </div>
        <div class="btn-logo">
            <a href="https://www.whatsapp.com/"><img class="svg-icon" src="Assets/Image/Logo_Whatsapp.svg"
                    alt="btn-logo"></a>
            <div class="pseudo"></div>
        </div>
        <div class="box">
            <div class="container">
                <form method="POST">
                    <div class="middle">
                        <div class="left">
                            <div class="new-password">
                                <h4>NO NIK KTP : *</h4>
                            </div>
                            <div class="new-password">
                                <h4>Ulangi Password : *</h4>
                            </div>
                        </div>
                        <div class="-right">
                            <div class="input-box">
                                <input type="password" name="no_nik" class="input" placeholder="NO NIK KTP" required>
                                <i class="fa fa-lock"></i>
                            </div>
                            <div class="input-box">
                                <input type="password" name="password" class="input" placeholder="Password" required>
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-box">
                        <input type="submit" name="update" class="submit" value="Reset Password">
                    </div>
                </form>
            </div>
        </div>
    </div>



    <script></script>
</body>

</html>