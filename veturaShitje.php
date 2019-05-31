<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Veturat ne Shitje | Rent a CAR |</title>

<link rel="stylesheet" type="text/css" href=  "stili.css">
<link rel="stylesheet" type="text/css" href=  "style.css">

</head>

<body>
<img src="images/free-wallpaper-11.jpg" width="1347px" height="320px">

<ul id="nav">
      <li><a href= "index.html">Ballina</a></li>
      <li><a href=" rezervo.html">Rezervo </a></li>
      <li><a href= "veturaShitje.html">Veturat Ne Shitje </a></li>
      <li><a href= "kontakti.html">Kontakti</a></li>
   </ul>


<!--
<hr>
<div class="djathte"> 

		<h2>Mund të na Ndiqni edhe në:</h2>
		<ul>
					<li><a href="https://www.facebook.com">Facebook</a></li> 
			<li><a href="https://twitter.com/">Twitter</a></li>
			<li><a href="http://www.telegrafi.com">Telegrafi</a></li>	
				</ul>
			<hr>
			
			</div>

-->





<div id="prapavija"><!-- end holder -->
  <h4>Veturat  me te reja i gjeni ne autosallonin tone ne <strong>Rent a Car "Service"</strong></h4>

  <div id="kutia">
    <div class="imgHolder">
      <div class="img"> <a href="AudiGaleria.html"><img src="images/Audi-Q7.jpg" width="249" height="189" /></a>
        <div class="TitulliFotos">
          <h3>Audi Q7 </h3>
          
   
          
          
          
        </div>
        <!-- end imgTitle --> 
      </div>
      <!-- end img --> 
    </div>
    <!-- end imgHolder -->
  
    <div class="imgHolder">
      <div class="img"> <a href="MercedesGaleria.html"><img src="images/Mercedes.jpg" width="249" height="189" /></a>
        <div class="TitulliFotos">
          <h3>Mercedes Benz C220 CDI </h3>
        </div>
        <!-- end imgTitle --> 
        
      </div>
      <!-- end img --> 
    </div>
    <!-- end imgHolder -->

    <div class="imgHolder">
      <div class="img"> <a href="BMWgaleria.html"><img src="images/BMWcover.jpg" width="249" height="189" /></a>
        <div class="TitulliFotos">
          <h3>BMW X3</h3>


<script>
function showUser(str) {
    if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET","getuser.php?q="+str,true);
        xmlhttp.send();
    }
}
</script>

<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a car:</option>
  <option value="1">Audi</option>
  <option value="2">Mercedes</option>
  <option value="3">BMW</option>
  <option value="4">Golf</option>
  </select>
</form>
<br>
<div id="txtHint"><b>Person info will be listed here...</b></div>

<?php
$tipi = $_GET['tipi'];

$con = mysqli_connect('localhost','root','');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"phpdatabase");
$sql="SELECT * FROM phptable WHERE id = '".$tipi."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>ID</th>
<th>Emri</th>
<th>Tipi</th>
<th>Shpejtesia</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['ID'] . "</td>";
    echo "<td>" . $row['Emri'] . "</td>";
    echo "<td>" . $row['Tipi'] . "</td>";
    echo "<td>" . $row['Shpejtesia'] . "</td>";
    
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

        </br>
      </br>
    </br>
      </br>











</body>
</html>