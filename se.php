<!DOCTYPE html>
<html>
<head>
  <title>View Customers Details</title>
  <style>
        ul {
    list-style-type: none;
    margin:0%;
    padding:0;
    overflow:hidden;
    background-color: cornflowerblue;
    text-align: center;
}
li{
    float:left;
    font-size:20px;
}
li a{
    font-family: lato;
    float: left
    display: block;
    color:white;
    text-align: center;
    padding: 10px;
    width:30%;
    text-decoration: none;  
}
li a:hover{
    background-color:palegreen;
    color: blue;
  }

body{
  background-image: url('https://upload.wikimedia.org/wikipedia/commons/4/4f/Credit-cards.jpg');
  background-size: cover;
  background-repeat: no-repeat;

}


    </style>

<body>
    <ul>
      <li><a href="home.html">Home</a></li>
      <li><a href="inser.html">Enter Customer Details</a></li>
      <li><a href="userdetails.php">View Customers</a></li>
     <li><a href="money.html">Credit Money</a></li>
      <li><a href="transfer.php">Current transaction History</a></li>

      </ul>
<br>
<br>
</head>

<center>
  <legend>USER DETAILS</legend>
    <form action="insert.php" method="POST">
<table border="2">
  <tr>
    <td>UserName</td>
    <td>Email</td>
    <td>AmountDeposit</td>
  </tr>

<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "naziya";
$db = mysqli_connect("$server","$username","$password","$dbname");
if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}
$UserName=$_GET['UserName'];
$records = mysqli_query($db,"select * from naziya "); // fetch data from database
while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['UserName']; ?></td>
    <td><?php echo $data['Email']; ?></td>
    <td><?php echo $data['AmountDeposit']; ?></td>
  </tr>	
<?php
}
?>
</table>
<?php mysqli_close($db);?><br>
</body>
</html> 