<!DOCTYPE html>
<html>
<link rel="stylesheet" href="style.css" />
<style >
	table{
		border: 0px solid black;
	}
	tr{
		border: 1px solid black;
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
<body>
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
			<th>Name</th>
			<th>Rank</th>
			<th>Teamname</th>
			<th>Runs</th>
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","cricket",3307);
		$query="select * from player  where type='batsman' order by runs desc";
		$result=mysqli_query($con,$query);[$i]=floor(1);
		if(mysqli_num_rows($result)>0)
		{
			while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
			echo "<tr><th>".$row["playername"]."</th><th>".
			floor($i)."</th><th>".
			$row["name"]."</th><th>".
			$row["runs"]."</th></tr>";
			}
		}?></table></th>

	</body>
	</html>