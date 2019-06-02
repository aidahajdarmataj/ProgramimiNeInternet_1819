
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Rent a Car Services | Makina e Juaj e Preferuar |</title>

<link rel="stylesheet" type="text/css" href=  "stili.css">

</head>
<style>
iframe {
	margin-right: 100px;

}

</style>

<body>
<img src="bg/free-wallpaper-11.jpg" width="1263px" height="320px">

<ul id="nav">
  <li><a href= "index.php">Ballina</a></li>
	<li><a href= "veturaShitje.php">Vetura ne shitje</a></li>
	<li><a href=" rezervo.html">Rezervo </a></li>
  <li><a href= "kontakti.php">Kontakti</a></li>
  <li><a href="register.php">Regjistrohu</a></li>
   </ul>



<hr>
<div id="php">
  <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <input type="text" name="fname">
    <input type="submit">
  </form>
  
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // collect value of input field
      $name = htmlspecialchars($_REQUEST['fname']); 
      if (empty($name)) {
          echo "Name is empty";
      } else {
          echo $name;
      }
  }
  ?>
</div>






<div id="mbeshtjelles">
  <div id="titulli">
    <h1>Rent a Car "Services"</h1>
  </div>
  
  
  <div id="kutia">
    <div class="imgHolder">
      <div class="img"> <img src="rent/Audi-Q7.jpg" width="249" height="189" /></a>
        <div class="TitulliFotos">
          <h3>Audi Q7 </h3>
        </div>
        
      </div>
     
    </div>

  

    <div class="imgHolder">
      <div class="img"><img src="rent/M06.jpg" width="249" height="189" /></a>
        <div class="TitulliFotos">
          <h3>Mercedes Benz C220 CDI </h3>
        </div>
        
        
      </div>
      
    </div>
   
    
    <div class="imgHolder">
      <div class="img"> <img src="rent/BMWcover.jpg" width="249" height="189" /></a>
        <div class="TitulliFotos">
          <h3>BMW X3</h3>
          


        </div>
        
     


      </div> 
 </div>

   

	<div class="imgHolder">
      <div class="img"> <img src="rent/Golf6.jpg" width="249" height="189" /></a>
        <div class="TitulliFotos2">
          <h3> Golf 6</h3>
        </div>
        
        
      </div>
      
    </div>
    
    <div class="imgHolder">
      <div class="img"> <img src="rent/Opel4.jpg" width="249" height="189" /></a>
        <div class="TitulliFotos2">
          <h3> Opel Zafira</h3>
        </div>
        
        
      </div>
      
    </div>
    
    <div class="imgHolder">
      <div class="img"> <img src="rent/Bora1.jpg" width="249" height="189" /></a>
        <div class="TitulliFotos2">
          <h3> Bora </h3>
        </div>
        
        
      </div>
      
    </div>
    
    <div class="imgHolder">
      <div class="img"> <img src="rent/Jetta6.jpg" width="249" height="189" /></a>
        <div class="TitulliFotos3">
          <h3> Jetta</h3>
        </div>
        
        
      </div>
      
    </div>
    
    <div class="imgHolder">
      <div class="img"> <img src="rent/BMW1.jpg" width="249" height="189" /></a>
        <div class="TitulliFotos3">
          <h3> BMW 5</h3>
        </div>
        
        
      </div>
      
    </div>
    
    <div class="imgHolder">
      <div class="img"> <img src="rent/LandRover1.jpg" width="249" height="189" /></a>
        <div class="TitulliFotos3">
          <h3> Land Rover</h3>
        </div>
        
        
      </div>
      
    </div>
    
    



     
    <br class="clearFloat"/>
  </div> 
  

  <br />
  <br />
  <h3> Mundë të na ndjekeni në Rrjetët Sociale: </h3>
  <center>  
   
  <img src="icons/fb.png"/> 
  <img src="icons/tw.png" />
  <img src="icons/gp.png" />
  <img src="icons/li.png" />
  <img src="icons/b.png" />
  
  </center>
  <br />
  
  <hr />
</div>

<footer class="fundi"><p>©2015 Te gjitha Drejtat rezervuara.   •   Design by Studentet nga Universiteti FIEK</p></footer>


</body>

</html>
