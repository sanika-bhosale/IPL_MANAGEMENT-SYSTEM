<html>
<link rel="stylesheet" href="style.css">
<body>
<div class="bag-image">
    <img class="top--img" src="IPL Logo.jpg" />

    <button class="back--btn">
    <a href="userHomepagelink.html">Back</a></button>
    
    
    <div style="margin-top:10px; style : center" >
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
    .center-php{
            position: relative;
            top: -58px;
            left: 980px;
            font-size: 50px;
            color: #e0295d;
            
    }
</style>

<table >
    <div class="title-table">
Team members of team
</div>
<div class="center-php">
    <?php
    $con = mysqli_connect("localhost", "root", "", "cricket",3307);
         $name=$_POST['name'];
         $que="select playername,cap_no from player where name='$name'";
                
          echo " $name ";
 
         ?></th></tr></table>
        </div>

<table align="center">
<tr>
<th>player Name</th>
<th>cap_number</th>
 
</tr>
        
        <?php
 
        $con=mysqli_connect("localhost","root","","cricket",3307);
        $query1="select  playername,cap_no FROM player WHERE name='$name'";
        $result1=mysqli_query($con,$query1);
 
        if(mysqli_num_rows($result1)==0)
        {
 
          echo "<script type='text/javascript'>alert('Incorrect team name select from available  team only i.e MI,RCB,CSK,SRH!!');</script>";
          header("refresh: 0.01; url=userHomepagelink.html");
        }
        else{
            while ($row=mysqli_fetch_assoc($result1)) {
                
                echo "<tr><th>".$row["playername"]."</th><th>".
                $row["cap_no"]."</th><tr>";
 
            }
        }
        mysqli_close($con);
        ?>
        </table>
        </body>
        </html>
