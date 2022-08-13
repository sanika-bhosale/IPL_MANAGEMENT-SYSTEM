<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css" />
<style >
	table{
		border: 0px solid black;
	}
	tr{
		border: 1px solid black;
		background-color:#F6F9F0;
	}
	th{
		border: 1px solid black;
		color: black;
	}
	.Tilte-of-page{
		width: 50%;
		position: relative;
		left: 39%;
	}
</style>
<head>
	<title>RANKS</title>
</head>
<body >
<div class="bag-image">
      <img class="top--img" src="IPL Logo.jpg" />
      <button class="back--btn">
        <a href="Rankingbar.html" style="color: white">Back</a>
      </button>

	<h1 class="Tilte-of-page">BATSMAN RANKING</h1>
			
			
			<table width="50%">
 <div style="margin-top:10px; style : center" >

	<table align="center">

		<tr>
			<th>Rank</th>
			<th>Name</th>
			<th>Rating</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket",3307);
		$query="select * from team order by rating desc";
		$result=mysqli_query($con,$query);
		[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
				echo "<tr><th>"
			.floor($i)."</th><th>".
			$row["name"]."</th><th>".
			$row["rating"]."</th></tr>";
			}}
		?>
</table>
</div>
		</div>

</body>
	</html>