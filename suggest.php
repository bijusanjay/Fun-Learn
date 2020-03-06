<html>
	<body>
		<?php
		   $dbhost = 'localhost';
		   $dbuser = '1154682';
		   $dbpass = 'Gowthamgr';
		   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,'1154682');
		   
		   if(mysqli_connect_errno()) {
			  die('Could not connect: ' . mysqli_connect_errno());
		   }
		   $sql = 'INSERT INTO suggestion_db '.
			  '(Suggestion) '.
			  'VALUES ("'. $_POST["suggest"] . '");';
		   
		   $retval = mysqli_query( $conn, $sql );
		   
		   if(!$retval ) {
			  die('Could not enter data: ' . mysqli_error($conn));
		   }
		   mysqli_close($conn);
		   echo "<script>window.location.assign('index.php');</script>";
		?>
	</body>
</html>