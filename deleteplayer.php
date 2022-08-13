<html>
  <head>
    <style></style>
    <title>Delete player</title>
  </head>

  <style>
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
    </style>
  <body>
    <button><a href="admin1st.html">Back</a></button>
    <div>
    <table align="center" class="table">
      <tr>
        <th>Cap No.</th>
        <th>Name</th>
       
      </tr>
      <?php
      $con=mysqli_connect("localhost","root","","cricket",3307);
  
      $query="select playername, cap_no from player order by cap_no asc";
      $result=mysqli_query($con,$query);
      [$i]=floor(1);
      if(mysqli_num_rows($result)>0) { while ($row=mysqli_fetch_assoc($result))
      { 
        $i=$i+1;
         echo "
      <tr>
        <th>". $row["cap_no"]."</th>
        <th>". $row["playername"]."</th>
      </tr>
      "; } } mysqli_close($con); ?>
    </table>
      </div>
      <div style="margin-top: 225px">
      <form action="delete_player.php" method="post">
        <table>
          <tr align="center">
            <p style="text-align: center; font-size: 25">
              Enter Player Cap Number to Delete
              <input
                type="text"
                name="cap_no"
                style="width: 300; height: 25"
              />
              <br /><br />
              <input
                type="submit"
                style="float: center"
                value="Submit"
              /><button style="float: right">
                <a href="admin1st.html">Logout</a>
              </button>
            </p>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
