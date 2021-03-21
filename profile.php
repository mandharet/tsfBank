<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="bot.svg" type="image/svg">
    <link rel="stylesheet" href="style.css">
    <title>TSF Bank ACcount Info</title>
</head>

<body>
	<?php
	session_start();
	include 'conn.php';
	?>

	<div class="navbar">

		<nav>
			<input type="checkbox" id="check">
			<label for="check" class="checkbtn">
				<p class="icon">&#8801;</p>
			</label>
			<label class="logo">TSF</label>
			<ul>
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="customers.php">Customers</a></li>
				<li><a href="history.php">History</a></li>
			</ul>
		</nav>



	</div>
	<?php


	$id = $_GET['id'];
	$_SESSION['id'] = $id;
	$query = "SELECT * FROM customer where id='$id' ";
	$query_run = mysqli_query($conn, $query);

	if (mysqli_num_rows($query_run) > 0) {
		foreach ($query_run as $row) {



			echo '<div class="container" >';

			echo '<div class="profile" >';

			echo '<h3>' . $row['name'] . ' </h3>
					<p> Account Number:<b> ' . $row['id'] . '</b> </p>
					
					<p> Email: <b>' . $row['email'] . ' </b></p>
					<p> Balance: <b>' . $row['balance'] . ' </b></p>
					<p></p>

				';
		}
	} else {
		echo "<p>No record found.</p";
	}


	?>


	<td><button class="sendbtn"><a href="transfer.php?name=<?php echo $row['name']; ?>"> Send Money </a> </button></td>



</body>

</html>