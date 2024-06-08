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
    <link rel="stylesheet" href="Assets/css/InputKode.css">
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
            <img src="Assets/Image/ForgotPasword.png" alt="">
        </div>
        <div class="btn-logo">
            <a href="https://www.whatsapp.com/"><img class="svg-icon" src="Assets/Image/Logo_Whatsapp.svg" alt="btn-logo"></a>
            <div class="pseudo"></div>
        </div>
        <div class="box">
            <div class="container">
                <form action="ResetPassword.php">
                    <p>Harap perhatikan bahwa verifikasi telepon diperlukan untuk reset password. Nomor Anda hanya akan
                        digunakan untuk memverifikasi identitas Anda untuk tujuan keamanan.</p>
                    <div class="telepon">
                        <h4>KODE : *</h4>
                    </div>
                    <div class="input-box">
                        <input type="number" class="input" placeholder="**********" required>
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="input-box">
                        <input type="submit" class="submit" value="Reset Password">
                    </div>

                </form>
            </div>
        </div>
    </div>



    <script src="Assets/script/main.js"></script>
</body>

</html>