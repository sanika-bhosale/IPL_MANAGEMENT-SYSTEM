<?php
 
session_start();
$name=$_POST['name'];
 
$runs=$_POST['runs'];
 
$con = mysqli_connect("localhost", "root", "", "cricket",3307) or die(mysqli_error($con));
$q="update player set runs='$runs' where playername='$name'";
if(mysqli_query($con,$q))
{
    header("refresh: 0.01; url=rank2.php");
}
else
{echo "<script type='text/javascript'>alert('ERROR!!');</script>";
  header("refresh: 0.01; url=rank2.php");
 
    //echo "error";
    //header("refresh: 0.01; url=admin1st.html");
}
?>
