<html>
<head>
	<title>Credit Money</title>
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
    background-image:  url(https://www.dream-wallpaper.com/free-wallpaper/nature-wallpaper/wonderful-green-nature-wallpapers-1-wallpaper/1920x1440/free-wallpaper-1.jpg);
    background-size: cover;
}
form{
width: 300px;
position : absolute;
top:50%;
left:50%;
transform: translate(-80%,-50%);
color:gold;
}
table{
color:orange;
font-weight:90px;
font-size: 30px;
font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
td, th {
  border: 1px black;
  text-align: center;
  padding: 8px;
}
</style>
      

</head>
<body>
    <ul>
      <li><a href="login.html">Home</a></li>
      <li><a href="insert.html">Enter Customer Details</a></li>
      <li><a href="userdetails.php">View Cutomers</a></li>
     <li><a href="moneytransfer.html">Credit Money</a></li>
      <li><a href="transferhistory.php">Current Transaction History</a></li>
     
      </ul>
  <center>
  
    <form action="updatedetails.php" method="POST">
  <center>
<h2><center>Credit Money</center></h2>
<table><tr><td align="center">
Sender's Name:</td><td><select name="sender">
  <option value="Select Name">Select Name:</option>
  <option value="naziya">naziya</option>
  <option value="dadu">dadu</option>
  <option value="rafik">rafik</option>
  <option value="shataj">shataj</option>
  <option value="simmu">simmu</option>
  <option value="muju">muju</option>
  <option value="sonu">sonu</option>
  <option value="asifiya">asifiya</option>  
  <option value="hussain">hussian</option>
  <option value="gudiya">gudiya</option>
</select></td></tr>
<tr><td>
Receiver's Name:</TD><td><select name="receiver">
  
  <option value="Select Name">Select Name:</option>
  <option value="naziya">naziya</option>
  <option value="dadu">dadu</option>
  <option value="rafik">rafik</option>
  <option value="shataj">shataj</option>
  <option value="simmu">simmu</option>
  <option value="muju">muju</option>
  <option value="sonu">sonu</option>
  <option value="asifiya">asifiya</option>  
  <option value="hussian">hussian</option>
  <option value="gudiya">gudiya</option>
</select></TD></TR>
<TR><TD>Credit:</TD><TD><input type="text" name="credit"></TD></TR><br>
</TABLE><input type="submit" value="Submit">
</form>
</body>
</html>