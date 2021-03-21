<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="bot.svg" type="image/svg">
    <link rel="stylesheet" href="style.css">
    <title>TSF Bank Transfer</title>
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
            <li><a class="" href="index.php">Home</a></li>
            <li><a href="customers.php">Customers</a></li>
            <li><a href="history.php">History</a></li>
        </ul>
    </nav>


	
	</div>
		<div class="container" >

  <div class="profile transfer" >
  <div class="alert lblue">
  Enter amount
</div>
	<?php
include 'conn.php';
session_start();




if (isset($_POST['submit'])){
$sender = $_SESSION['name'];
$receiver = $_POST['slct'];
$amount = $_POST['amount'];
$balance = $_SESSION['balance'];
if($amount!="" AND $amount<=$balance ){
	$reg = "INSERT INTO transfer(sender,receiver,amount) values('$sender','$receiver',$amount  )";
	mysqli_query($conn,$reg);
	$up1 = "UPDATE customer SET balance = balance-$amount WHERE name='$sender'";
	mysqli_query($conn,$up1);
	$up1 = "UPDATE customer SET balance = balance+$amount WHERE name='$receiver'";
	mysqli_query($conn,$up1);
	echo "<div class='alert lgreen'>
	Transfer successful to '$receiver'
	</div>";


}

elseif($amount==""){
	
	echo '<div class="alert lred">
	Enter amount
</div>';


}
elseif($amount>$balance OR !is_numeric($amount)){ 
	

	echo '<div class="alert lred">
	Insufficient balance or enter valid amount
	</div>';
?>

<?php

}

}



if (isset($_POST['cancel'])){

	header('location:customers.php');
}
?>


       <?php
	include 'conn.php';
	
	
		$name = $_GET['name'];
		$_SESSION['name'] = $name;
		
		
		?>
		<form method="POST"   >
  <div class="form-group">
    <label >Sender: </label>
    <h3 class="muted"><?php echo $_SESSION['name'] ?></h3>
    
  
  <br>
    <label for="receiver">Receiver:</label>
	<div class="select">
 		<select class="form-control" id="slct" name="slct">
		<!-- <option selected disabled><?php echo $_SESSION['name'] ?></option> -->
   <?php
    $sql = "SELECT name FROM customer where name!='".$_SESSION['name']."' ";
	$result = mysqli_query($conn,$sql);
	while($rows = $result->fetch_assoc()){
		$names = $rows['name'];
		echo "<option value='$names'>$names</option>";
	}
    ?>
    
	</select></div>
  	<br>

  
    <label for="amount">Amount:
    <input type="text" class="form-control" autocomplete=off id="amount" name="amount"  placeholder="$">
	</label><br>
  <button type="submit" class="saveb" name="submit" id="submit">Submit</button>
  <button type="submit" class="cancelb" name="cancel">Cancel</button>
  </div>
</form>
<?php 


?>
<?php 
		$query = "SELECT balance FROM customer where name='".$_SESSION['name']."' ";
		$query_run = mysqli_query($conn,$query);

		if(mysqli_num_rows($query_run)>0){
			foreach($query_run as $row){
				
					
					$_SESSION['balance']=$row['balance'];
			}
		}
?>
 					
   </div></div>
</body>
</html>
