<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<style >
        .bag-image{
                height: inherit;
                width: inherit;
        }
table{
border: 1px solid black;
position: relative;
bottom: 25px;
}
tr{
border: 1px solid black;
}
th{
border: 1px solid black;
}
</style>
<head><p>
<title>SCHEDULES</title>
</head>
<body>
<div class="bag-image">
    <img class="top--img" src="IPL Logo.jpg" />     
<button class="back--btn">
        <a href="know.html" style="color:white;">Back</a>
      </button>
<div style="margin-top:115px; style : center" >
<table align="center">
<tr>

<th>Player name</th>
<th>Cap_no</th>
<th>Team name</th>


</tr>
<?php
$con=mysqli_connect("localhost","root","","cricket",3307);
$query="SELECT playername,cap_no,name
FROM player
WHERE EXISTS (SELECT *
              FROM team
              WHERE team.rating>7);";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)>0)
{
while ($row=mysqli_fetch_assoc($result)) {
echo "<tr><th>".$row["playername"]."</th><th>".
$row["cap_no"]."</th><th>".

        $row["name"]."</th></tr>";
}
}
mysqli_close($con);
?>







</body>
</html>
