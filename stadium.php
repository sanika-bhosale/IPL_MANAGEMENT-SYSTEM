<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css">
<style >
	table{
		border: 1px solid black;
	}
	tr{
		border: 1px solid black;
	}
	th{
		border: 1px solid black;
	}
	.title-table{
        color: #e0295d;
        font-size: 50px;
  background: #19388a;
  text-align: center;  
    }

		.stadium-table{
			position: relative;
			top: 30px;
		}
</style>
<head>
	<title>Stadium</title>
</head>
<body>
<div class="bag-image">
    <img class="top--img" src="IPL Logo.jpg" />
    <button class="back--btn">
    <a href="admin1st.html">Back</a></button>
		<div class="title-table">
Stadiums
</div>
<div class="stadium-table">
	<table align="center">
		<tr>
			<th>Stadium Name</th>
			<th>Capacity</th>
			<th>DOI</th>
			<th>Board Name</th>
			<th>Team's Stadium</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket",3307);
		$query="call stadium()";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["stadium_name"]."</th>"."<th>".
			$row["capacity"]."</th><th>".
			$row["DOI"]."</th><th>".
			$row["board_name"]."</th><th>".
			$row["team"]."</th></tr>";
			}
		}
		mysqli_close($con);
		?>
	</table>
	</div>
</body>
</html>