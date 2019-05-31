<?php

	echo "<h1> Regjistrohu</h1>";

	

if(isset($_POST['submit'])) {
	$submit = $_POST['submit'];
	
		
	// form data
	// if(isset())
	$fullname = strip_tags($_POST['fullname']);
	$username = strtolower(strip_tags($_POST['username']));
	$password = strip_tags ($_POST['password']);
	$repeatpassword =strip_tags ($_POST['repeatpassword']);
	$date = date("y.m.d");
	
	
	if ($submit)
	{
		
		//open database	
		$connect = mysqli_connect("localhost","root","");
		mysqli_select_db("phplogin"); // select database phplogin
		
		$namecheck = mysqli_query("SELECT username FROM users WHERE username='$username'");

		$count = mysqli_num_rows($namecheck);
		
		if ($count !=0)
		{
			die("Emri i pėrdoruesit eshte  marrė tashmė!");	
			
		}
		
		
		// check for existance 
		if($fullname&&$username&&$password&&$repeatpassword)
	{
		
		
		
		if ($password==$repeatpassword)
		
		{
			// check char lengrh of username and fullname
		if (strlen($username)>25 || strlen($fullname)>25)
		{
		 	echo "Gjatėsia ne emrin e pėrdoruesit apo emrin e skedarit ėshtė shumė e gjatė!";
			
		}
		else 
		{
			//check password length
			if (strlen($password)>25||strlen($password)<6)
			
			{
				echo "Fjalekalimi duhet te jet nga  6 dhe 25 karaktere";
			}
			else 
			
			{
				
				// encrypt password
				$password = md5($password);	
				$repeatpassword = md5($repeatpassword);	
				
				
				
				$queryreg = mysqli_query("
				
				INSERT INTO users VALUES ('','$username','$password','$fullname','$date')
				
				");
				
				 die ("<h3>Ju jeni regjistruar!</h3> <a href='identifikohu.html'> Kthehu tek identifikoheni faqe</a>");
			}
			
		}
			
		}
		else 
			echo "Fjalėkalimet tuaja nuk pėrputhen";
		
		
		
	}
	else 
	
		echo "Ju lutemi tė plotėsoni nė <b> gjitha </b> fushat!";
		
		
			
	}
}


?>

<html>
<p>
	
    <form action="register.php" method="POST">
    	<table>
        	<tr>
            	<td>
               Emri juaj i plotė:
                 </td>   
                 <td>
                 <input type="text" name="fullname" value="<?php echo $fullname; ?>">
            	 </td>	
			</tr>
            <tr>
            	<td>
               	Zgjidhni njė emėr pėrdoruesi:
                 </td>   
                 <td>
                 <input type="text" name="username" value="<?php echo $username; ?>">
            	 </td>	
			</tr>
            <tr>
            	<td>
               	Zgjidhni njė fjalėkalim:
                 </td>   
                 <td>
                 <input type="password" name="password">
            	 </td>	
			</tr>
            <tr>
            	<td>
               	Pėrseriteni fjalėkalimin tuaj:
                 </td>   
                 <td>
                 <input type="password" name="repeatpassword">
            	 </td>	
			</tr>
           
           			
		</table>
        
        <input type="submit" name="submit" value="Regjistrohu">
	<a href="identifikohu.html">Identifikohu</a>
        
        </form>	
</html>



















