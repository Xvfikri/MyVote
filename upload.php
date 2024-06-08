<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Masukkan library SweetAlert di sini -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <!-- Isi dari halaman Anda -->
</body>
</html>
<?php

if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "db_Connect.php";

	echo "<pre>";
	print_r($_FILES['my_image']);
	echo "</pre>";

	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];

	if ($error === 0) {
		if ($img_size > 200000000) {
			$em = "Sorry, your file is too large.";
			header("Location: Admin_dashboard.php?error=$em");
		} else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);

			$allowed_exs = array("jpg", "jpeg", "png");

			if (in_array($img_ex_lc, $allowed_exs)) {
				$name = $_POST["name"];
				$visi = $_POST["visi"];
				$misi = $_POST["misi"];
				$new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
				$img_upload_path = 'uploads/' . $new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "INSERT INTO paslon(nama_paslon, visi, misi, foto_paslon) 
				        VALUES('$name', '$visi', '$misi', '$new_img_name')";
				mysqli_query($conn, $sql);
				// header("Location: upload.php");
				echo "<script>
						swal('Data berhasil ditambahkan !');
					</script>";
				return false;
				
			} else {
				$em = "You can't upload files of this type";
				header("Location: view.php?error=$em");
			}
		}
	} else {
		$em = "unknown error occurred!";
		header("Location: Admin_dashboard.php?error=$em");
	}

} else {
	header("Location: Admin_dashboard.php");
}