<html>
  <head>
    <title>update</title>
    
</head>
<body>
<center>
<?php 
	$UserName = $_POST['UserName'];
	$Email = $_POST['Email'];
	$MobileNumber = $_POST['MobileNumber'];
	$AmountDeposit = $_POST['AmountDeposit'];
$server = "localhost";
$username = "root";
$password = "";
$dbname = "naziya";


$conn = mysqli_connect("$server","$username","$password","$dbname");

	if($conn->connect_error){
		echo $conn->connect_error;
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into naziya(UserName, Email, MobileNumber, AmountDeposit) values(?, ?, ?, ?)");
		$stmt->bind_param('ssii',$UserName,$Email,$MobileNumber,$AmountDeposit);
		$execval = $stmt->execute();

		echo $execval;
		echo "Registration successfull...";
		$stmt->close();
		$conn->close();
	}
?>
</center>
</body>
</html>