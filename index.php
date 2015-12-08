<!DOCTYPE html>
<html>
<head>
    <title>
        CMS
    </title>
	<meta charset="utf-8" />
</head>
<body>

	<?php
	
	$db = mysql_connect("localhost", "root", "");
	
	
	if($db)
	{
		mysql_select_db("attendancedatabae",$db);
		if(isset($_REQUEST['user']) && isset($_REQUEST['pwd'])) 
		{
			 $username= $_REQUEST['user'];
			 $pass=$_REQUEST['pwd'];
			 $query = "SELECT * FROM user where fullname = '". $username. "' AND  email = '".$pass."'";
			 $result= mysql_query($query, $db);
			 if($result==NULL)
			 {
				
				 echo "Enter proper username and password";
				 exit;
			 }
			 else
			 {
				header('Location: http://localhost/lab11/student.php');
			 }
			 
		}
	}
	else
	{
		echo "Unable to connect";
	}
	
	?>
    


<form method="POST">
    Username: <input type="text" name="user"/>
        <br />
        Password: <input type="password" name="pwd" />
        <br />
        <input type="submit" value="Login" />

    </form>
</body>
</html>
