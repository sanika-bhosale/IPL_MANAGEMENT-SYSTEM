<!DOCTYPE html>
<html>
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

    .title--decro{
        color: #e0295d;
        font-size: 50px;
  background: #19388a;
  text-align: center;  
  

      }
</style>
<head>
    <title>RANKS</title>
</head>
<link rel="stylesheet" href="style.css" />
<body >
   

<div class="bag-image">
      <img class="top--img" src="IPL Logo.jpg" />
      <button class="back--btn">
        <a href="AdminRankingbar.html" style="color: white">Back</a>
      </button>
      <h1 class="title--decro">Bowler Ranking</h1>
        <table align="center">
        <tr>
            <th>Name</th>
            <th>Rank</th>
            <th>Teamname</th>
            <th>wickets</th>
            
        </tr>
        <?php
        $con=mysqli_connect("localhost","root","","cricket",3307);
        $query="select * from player  where type='bowler' order by wickets desc";
        $result=mysqli_query($con,$query);[$i]=floor(1);
        if(mysqli_num_rows($result)>0)
        {
            while ($row=mysqli_fetch_assoc($result)) { $i=$i+1;
                $nm = $row["cap_no"];
            $q="update player set rank='$i' where cap_no='$nm'";
            mysqli_query($con,$q);
            
            echo "<tr><th>".$row["playername"]."</th><th>".
            floor($i)."</th><th>".
            $row["name"]."</th><th>".
            $row["wickets"]."</th></tr>";
            }
        }?></table></th><th>
 
<table style="vertical-align: text-top;"><tr><th>
    <p align="center" style="width: 100%;padding-right: 100px;"><div style="align-content: center;background-color: ">
    <form action="pupdate3.php" method="POST">
    ENTER PLAYERNAME    <input type="text" name="name" placeholder="enter playername"><br>
    ENTER WICKETS        <input type="number" name="wickets" placeholder="wickets"><br>
 
    <button>UPDATE</button></form>
</div></p></th></tr></table></th></tr></table>
    
</body>
</html>
