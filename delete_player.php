<?php
    $con = mysqli_connect("localhost", "root","", "cricket",3307) or die(mysqli_error($con));
    $cap_no=$_POST['cap_no'];
					$sql2="delete from player where cap_no='$cap_no'";
						if(mysqli_query($con,$sql2))
								{
								echo "<script type='text/javascript'>alert('player deleted successfully!!');</script>";
								header("refresh: 0.01; url=admin1st.html");
								echo "<script language='javascript'>";
								}
else{
	echo "<script language='javascript'>";
	
	echo "alert('PLAYER NOT PRESENT')";
	echo "</script>";
    header("refresh: 0.01; url=admin1st.html");
    
}
		
mysqli_close($con);

?>    
