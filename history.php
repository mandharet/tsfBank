<?php
include 'conn.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <title>TSF Bank Transfer History</title>
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
				<li><a href="customers.php">Customers</a></li>
				<li><a class="active" href="history.php">History</a></li>
			</ul>
		</nav>



	</div>

	<?php
	include 'conn.php';

	$q = "select * from transfer";

	$query_run = mysqli_query($conn, $q);

	if (mysqli_num_rows($query_run) > 0) {
		echo '<div class="container">
	
		<table class="table ">
		<caption><b>Transfer History</b></caption>
			<tr>
				
				<th>Name</th>
				<th>Email</th>
				<th>Balance</th>
				

			</tr>';
		foreach ($query_run as $row) {


	?>
			<tr>

				<td><?php echo $row['sender']; ?></td>
				<td><?php echo $row['receiver']; ?></td>
				<td><?php echo $row['amount']; ?></td>



			</tr>
	<?php
		}
	} else {
		echo '<div class="alert lblue">
  					No transactions done yet...
				</div>';
	}
	?>
	</table>
	</div>
	</div>

</body>

</html>