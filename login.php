<html>
<head>
<title> Logohu </title>

</head>
<style>

a:link {
    color: #FF0000;
}

/* visited link */
a:visited {
    color: #00FF00;
}

/* mouse over link */
a:hover {
    color: #FF00FF;
}

/* selected link */
a:active {
    color: #0000FF;


</style>
<body>





<?php



	session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if ($username&&$password)
	{
		$connect = mysql_connect("localhost","root","") or die ("Nuk mund të lidhët.");
		mysql_select_db("phplogin") or die ("Nuk mundë të gjejë db");
		
		$query = mysql_query("SELECT * FROM users WHERE username='$username'");
		
		$numrows = mysql_num_rows($query);
		
		if ($numrows!=0)
		{
			while ($row = mysql_fetch_assoc($query)) 
			
				{
					
					$dbusername  = $row['username'];
					$dbpassword  = $row['password'];
					
				}
				// check to see if they match!
				if ($username==$dbusername&&md5($password)==$dbpassword)
				{
					
					echo "Ju jeni <b> $username</b>!<a href='index.html'><b> Kliko </b></a> këtu për të hyrë në faqen për Rezervim te Veurave.";
					$_SESSION['username']=$dbusername;
					
				
				}
				else 
					echo "fjalëkalim i pasaktë";

			
		}
		else 
			die("Ky përdorues nuk ekziston!");
		
		
			
			//echo $numrows;
	}
	else 
		die("Ju lutem shkruani 'Përdoruesin' dhe fjalëkalimin!");
		
		
		
				

		
		
		
		
		
		
	
	
	
	
	
	
	




?>
