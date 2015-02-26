<?php
	$hostname_db = "mysql.seis752.com";
	$database_db = "seis752";
	$username_db = "seis752student";
	$password_db = "gradsoftware";
?>
<html>
  <body>
    <ol>
    <?php
		$con = mysql_connect($hostname_db,$username_db,$password_db); 
		if (!$con)
		  {
		  die('Could not connect: ' . mysql_error());
		  }
		
		mysql_select_db($database_db, $con);
		
		$result = mysql_query("SELECT * FROM users where name like '%$name%' limit 20");
		
		while($row = mysql_fetch_array($result))
		  {
		  echo '<li>'.$row['name'] . " - " . $row['username'];
		  echo "</li>";
		  }
		
		mysql_close($con);
	?>
    </ol>
  </body>
</html>
