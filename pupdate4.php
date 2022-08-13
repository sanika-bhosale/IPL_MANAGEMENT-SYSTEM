<?php
 
session_start();
$name=$_POST['name'];
 
$runs=$_POST['runs'];
$wickets=$_POST['wickets'];



$con = mysqli_connect("localhost", "root", "", "cricket",3307) or die(mysqli_error($con));
$q="update player set runs='$runs',wickets='$wickets' where playername='$name'";
if(mysqli_query($con,$q))
{
    header("refresh: 0.01; url=rank4.php");
}
else
{echo "<script type='text/javascript'>alert('ERROR!!');</script>";
  header("refresh: 0.01; url=rank4.php");
 
    //echo "error";
    //header("refresh: 0.01; url=admin1st.html");
}
?>
 
