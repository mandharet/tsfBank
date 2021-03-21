<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="bot.svg" type="image/svg">
    <link rel="stylesheet" href="style.css">
    <title>TSF Bank Customer List</title>
</head>

<body>


	<div class="navbar">

		<nav>
			<input type="checkbox" id="check">
			<label for="check" class="checkbtn">
				<p class="icon">&#8801;</p>
			</label>
			<label class="logo">TSF</label>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a class="active" href="customers.php">Customers</a></li>
				<li><a href="history.php">History</a></li>
			</ul>
		</nav>



	</div>


	<div class="container">

		<table class="table ">
			<caption><b>Customers</b></caption>
			<tr>
				<th>Sr no.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Balance</th>
				<!-- <th>Details</th> -->

			</tr>
			<?php
			include 'conn.php';

			$q = "select * from customer";

			$query_run = mysqli_query($conn, $q);

			if (mysqli_num_rows($query_run) > 0) {
				foreach ($query_run as $row) {


			?>
					<tr>
						<td class="cid"><a class="link" href="profile.php?id=<?php echo $row['id']; ?>"><?php echo $row['id']; ?></a></td>
						<td><a class="link" href="profile.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a> </td>
						<td><a class="link" href="profile.php?id=<?php echo $row['id']; ?>"><?php echo $row['email']; ?></a></td>
						<td><a class="link" href="profile.php?id=<?php echo $row['id']; ?>"><?php echo $row['balance']; ?></a></td>



					</tr>
			<?php
				}
			}
			?>
		</table>

	</div>

</body>

</html>