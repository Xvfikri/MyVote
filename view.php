<?php include "db_Connect.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<title>View</title>
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-wrap: wrap;
			min-height: 100vh;
		}

		.alb {
			width: 200px;
			height: 200px;
			padding: 5px;
		}

		.alb img {
			width: 100%;
			height: 100%;
		}

		a {
			text-decoration: none;
			color: black;
		}
	</style>
</head>

<body>
	<a href="index.php">&#8592;</a>
	<?php
	$sql = "SELECT * FROM paslon ORDER BY id_paslon DESC";
	$res = mysqli_query($conn, $sql);


	if (mysqli_num_rows($res) > 0) {
		while ($row = mysqli_fetch_array($res)) { ?>

			<div class="alb">
				<p>
					<?= $row["nama_paslon"]; ?>
				</p>
				<p>
					<?= $row["visi"] ?>
				</p>
				<p>
					<?= $row["misi"] ?>
				</p>
				<img src="uploads/<?= $row['foto_paslon'] ?>">
			</div>

		<?php }
	} ?>
</body>

</html>