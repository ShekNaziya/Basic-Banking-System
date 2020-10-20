<html>
  <head>
    <title>update</title>
    
</head>
<body>
<center>
<?php 
	
	$sender = $_POST['sender'];
	$reciever = $_POST['reciever'];
	$credit = $_POST['credit'];
	$conn = new mysqli('localhost','root','','naziya');
	if($conn->connect_error){
		echo $conn->connect_error;
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into history( sender, reciever, credit) values( ?, ?, ?)");

		$stmt->bind_param('ssi', $sender, $reciever, $credit);

		$execval = $stmt->execute();

		echo $execval;
		echo "Registration successfull...";
		$stmt->close();
		$conn->close();
	}
?>

<?php
$conn = new mysqli('localhost','root','','naziya');
if($conn-> connect_error){
die("connection failed : ". $conn->connect_error);
}
$credit=$_POST['credit'];
$sender=$_POST['sender'];
$reciever=$_POST['reciever'];
$record="SELECT AmountDeposit from naziya WHERE name='$sender'";
$result=mysqli_query($conn,$record);
$row=mysqli_fetch_assoc($result);
$num=(int)implode('',$row);
if($credit>$num){
echo "INSUFFICIENT CREDIT BALANCE!!!!";
}
elseif($sender==$reciever)
{
echo "YOU HAVE ENTERED SAME SENDER AND RECIEVER.....TRY AGAIN!!";

}
elseif($credit==0){
echo "CREDITS ENTERED AS ZERO...TRY AGAIN!";
}
else{

$sl="INSERT INTO history(sender,reciever,credit) VALUES('$_POST[sender]','$_POST[reciever]','$_POST[credit]')";
mysqli_query($conn,"UPDATE naziya SET AmountDeposit = AmountDeposit - '$credit' WHERE UserName='$sender'");
mysqli_query($conn,"UPDATE naziya SET AmountDeposit = AmountDeposit + '$credit' WHERE UserName='$reciever'");
echo "INSERTED";
}
?>


</center>
</body>
</html>