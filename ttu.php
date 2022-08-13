<html>
<body>
    <button class="back--btn" ><a href="schedule_u.php" style="color:">Back</a></button><div style="margin-top:10px; style : center" >
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
</style>
<table width="100%"; align="center"><tr><th>
    <?php
    $con=mysqli_connect("localhost","root","","cricket",3307);
         $match_no=$_POST['match_no'];
         $que="select team1 from schedules where match_no='$match_no'";
                
        echo "Squad for match number $match_no ";
    
        ?></th></tr></table>



<table width="100%"><tr><th>
    <table align="center">
        
        <?php
        $con=mysqli_connect("localhost","root","","cricket",3307);
        $query1="SELECT p.playername FROM schedules s,player p WHERE s.team1=p.name AND s.match_no='$match_no'";
        
        $query="select sc.team1 from schedules sc where  sc.match_no='$match_no' limit 0,1";
        $res=mysqli_query($con,$query);
        if(mysqli_num_rows($res)>0){
        while ($row=mysqli_fetch_assoc($res)) {
            echo "<tr><th><b>".$row["team1"]."</b></th></tr>";
                    }
        }
 
        $result1=mysqli_query($con,$query1);
        if(mysqli_num_rows($result1)>0)
        {
            while ($row=mysqli_fetch_assoc($result1)) {
            echo "<tr><th>".$row["playername"]."</th></tr>";
            
            }
        }
        mysqli_close($con);
        ?></table></th><th>
 
        <table align="center">
        <?php
        $match_no=$_POST['match_no'];
        $con=mysqli_connect("localhost","root","","cricket",3325);
        $query1="SELECT p.playername FROM schedules s,player p WHERE s.team2=p.name AND s.match_no='$match_no'";
        $result1=mysqli_query($con,$query1);
        
        $query="select sc.team2 from schedules sc where  sc.match_no='$match_no' limit 0,1";
        $res=mysqli_query($con,$query);
        if(mysqli_num_rows($res)>0){
        while ($row=mysqli_fetch_assoc($res)) {
            echo "<tr><th><b>".$row["team2"]."</b></th></tr>";
                    }
        }
 
        if(mysqli_num_rows($result1)>0)
        {
            while ($row=mysqli_fetch_assoc($result1)) {
            echo "<tr><th>".$row["playername"]."</th></tr>";
            
            }
        }
        mysqli_close($con);
        ?></table></th></tr></table>
        <br><br>



</body>
</html>
