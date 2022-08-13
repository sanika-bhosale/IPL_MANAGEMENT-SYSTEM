<?php
 
session_start();
$name=$_POST['name'];
$wickets=$_POST['wickets'];
 
$con = mysqli_connect("localhost", "root", "", "cricket",3307) or die(mysqli_error($con));
$q="update player set wickets='$wickets' where playername='$name'";
if(mysqli_query($con,$q))
{
    header("refresh: 0.01; url=rank3.php");
}
else
{echo "<script type='text/javascript'>alert('ERROR!!');</script>";
  header("refresh: 0.01; url=rank.php");
 
    //echo "error";
    //header("refresh: 0.01; url=admin1st.html");
}
?>
