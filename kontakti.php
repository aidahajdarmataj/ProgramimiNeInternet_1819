
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Kontakti | Kontakto Staffin |</title>

<link rel="stylesheet" type="text/css" href=  "stili.css">
<style>
#formWrapper {
	width: 550px;
	background:#AFC8DE;
	margin:2em auto	0 auto;
	padding: 2em 0 2em 0;
	border: solid 5px #F1F1F1;
	
	
	
}
form {
	width: 500px;
	margin: 0 auto 0 auto;
		
	
	
	
}
label {
	display: block;
	margin: 0.3em 0 0.3em 2em;
	font-family:Arial , Helvetica , sans-serif;
	color: #8888888;
	font-size: 1em;
	
	
}
input {
	width: 250px;
	margin:0 0 0 2em;	
	
}
textarea {
	
	width: 300px;
	height: 90px;
	margin: 0 0 0 2em;
	
	
}
fieldset {
	
	border: none;
	background:#F1F1F1;
	padding:0 0 2em;
	
	
	
	
}

.labelOne {
	margin-top: 1em;	
	
	
}
.btn  {
		
	width: 125px;
	margin: 0 0 0 2em;
	font-family:Arial , Helvetica , sans-serif;
	color: #555555;
	font-weight: bold;
	
	
	
	
	
}
form h4 {
	margin: 1em 0 1.5em 2 em;
	font-size:1.2em;
	font-family: Arial , Helvetica , sans-serif;
	color: rgb(66, 93, 146);
	text-align: center; 
	font-weight: bold;
	
	
	
}
#koha {
	background-color: lightblue;
	}
	#cookies {
		background-color: rgb(230, 238, 241);
		border:3px solid #a1a1a1;
	}
		








</style>

</head>

<body>

<img src="bg/free-wallpaper-11.jpg" width="1280px" height="320px">


<ul id="nav">
  <li><a href= "index.php">Ballina</a></li>
	<li><a href= "veturaShitje.php">Vetura ne shitje</a></li>
	<li><a href=" rezervo.html">Rezervo </a></li>
	<li><a href= "kontakti.php">Kontakti</a></li>
  <li><a href="register.php">Regjistrohu</a></li>
	
   </ul>
<div id="koha">
<?php
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
	</div>

<hr>
	<div id="cookies">
		<?php
$cookie_name = "Fiek";
$cookie_value = "Programimi ne Interenet";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
     echo "Cookie '" . $cookie_name . "' is set!<br>";
     echo "Value is: " . $_COOKIE[$cookie_name];
}
?>
	
	

<p><strong>Note:</strong> You might have to reload the page to see the value of the cookie.</p>
</div>

<!--div class="djathte"> 

		<h2>Mund të na Ndiqni edhe në:</h2>
		<ul>
					<li><a href="https://www.facebook.com">Facebook</a></li> 
			<li><a href="https://twitter.com/">Twitter</a></li>
			<li><a href="http://www.telegrafi.com">Telegrafi</a></li>	
				</ul>
			<hr>
			
			</div-->
<hr>
<div id="formWrapper">
	
    <form >
    
        
        <fieldset class="first">
        <h4> Mbushe e gjithë formularin dhe Kontakto: </h4>
        <label class="labelOne" for="name">Emri dhe Mbiemri: </label>
        <input name="name">
        
        <label for="email">  Emaili: </label>
        <input name="email" />
        
        <label for="Coments"> Mesazhi: </label>
        <textarea name="coments"> </textarea>
        
        
        
        
        
        
        
        
        </fieldset>
        <fieldset>
        
        <input class="btn" name="submit" type="submit" value="Dergo Email" />
        <input class="btn" name="reset" type="reset" value="Pastro" />
        
        
        
        
        </fieldset>
    
    
    
    
    </form>



</div>


</body>

</html>

