<html>
<head><Title>Leader Board</Title>
    <style type="text/css">
    table {
        border-collapse: collapse;
        width: 100%;
        color: #588c7e;
        font-family: monospace;
        font-size: 25px;
        text-align: left;
}
th {
    background-color: #128054;
    color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
h1{
    text-align: center;
}
#strip{
    background-color: rgb(14, 231, 133);
    padding: 50px;
    color: white;
    height: 5%;
}
.Compete{
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.Leaderboard,.HomePage{
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}
.Logout{
    background-color: #336600;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}
    </style>
</head>
<body>
<?php
$send=$_GET['send'];
?>
<div id="strip">
<button class="HomePage" onclick="window.location.href = 'http://192.168.43.136:80/test/Homepage.php?send=<?php echo $send ?>';">Home page</button>
<button class="Compete" onclick="window.location.href = 'http://192.168.43.136:80/Compiler/home.php?send=<?php echo $send ?>';">Compete</button>
<button class="LeaderBoard" onclick="window.location.href = 'http://192.168.43.136:80/test/Leaderboard.php?send=<?php echo $send ?>';">LeaderBoard</button>
<button class="Logout" onclick="window.location.href = 'http://192.168.43.136:80/test/Logout.php'">Log Out</button>

</div>




<h1 >Current Leader board</h1>
<?php
session_start();
$con=mysqli_connect('localhost','root',NULL);
mysqli_select_db($con,'execute');
$sql="SELECT * FROM `infotable` ORDER BY score DESC";
$result=$con->query($sql);
echo "<table>";
echo "<tr>";
echo "<th>First Name</th>";
echo "<th>Last Name</th>";
echo "<th>Score</th>";
echo "</tr>";
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        echo "<tr><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td><td>".$row["score"]."</td><tr>";

    }echo "</table>";
}
else{
    echo "0";
}
echo "</table>";
?>
</body>
</html>


                