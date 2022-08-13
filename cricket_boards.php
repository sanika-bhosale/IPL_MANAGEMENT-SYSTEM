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

		.table-up{
			position:relative;
			top: 20px;
		}

</style>
<head>
	<title>Cricket Board</title>
</head>
<body>
<div class="bag-image">
    <img class="top--img" src="IPL Logo.jpg" />
    <button class="back--btn">
    <a href="admin1st.html">Back</a></button>
		<div class="title-table">
Cricket Board's
</div>
  
	<table class="table-up" align="center">
		<tr>
			<th>Board Name</th>
			<th>Chairman</th>
			<th>Team's Board</th>
			<th>DOA</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket",3307);
		$query="select * from cricket_boards";
		$result=mysqli_query($con,$query);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) {
			echo "<tr><th>".$row["board_name"]."</th>"."<th>".
			$row["chairman"]."</th><th>".
			$row["team"]."</th><th>".
			$row["DOA"]."</th></tr>";
			}
		}
		mysqli_close($con);
		?>
	</table>
</body>
</html>