<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<style >
table{
   
border: 2px solid black;
     width:500px;
    height: =500px;
}
tr{
   
border: 2px solid black;
   
}
th{
border: 2px solid black;
     height: 10px;
}
</style>
<head>
<title>HighestRun</title>
</head>
<body>
<div class="bag-image">
    <img class="top--img" src="IPL Logo.jpg" />
    <button class="back--btn">
        <a href="know.html" style="color:white;">Back</a>
      </button>
<div style="margin-top:225px; style : center" >
<table align="center">
<tr>
<th>player Name</th>
 <th>cap_number</th>
     <th>team</th>
<th>Highest-wickets</th>

</tr>
<?php
$con=mysqli_connect("localhost","root","","cricket",3307);
$query="SELECT playername,cap_no,name,runs from player where wickets=(select MAX(wickets)from player);
";
$result=mysqli_query($con,$query);

     
       
    if(mysqli_num_rows($result)>0){
        while ($row=mysqli_fetch_assoc($result)) {
            echo "<tr><th>".$row["playername"]."</th><th>".
                 $row["cap_no"]."</th><th>".
                 $row["name"]."</th><th>".
            $row["runs"]."</th><tr>";
           
            }
        }

mysqli_close($con);
?>
</table>
</body>
</html>
