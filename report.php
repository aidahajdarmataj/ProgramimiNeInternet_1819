<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mbushe Formën:</title>
</head>

<body>


<?php

if(isset($_POST['submit'])) {
	$submit = $_POST['submit'];


	$emri_juaj = $_POST['emrijuaj'];
	
	$mbiemri_juaj = $_POST['mbiemrijuaj'];
	
	//$emri_juaj = $_POST['emrijuaj']. ' ' .$_POST['mbiemrijuaj'];
	
	$email_juaj = $_POST['emailjuaj'];
	
	$numri_telefonit = $_POST['numritelefonit'];
	
	$adresa_juaj = $_POST['adresajuaj'];
	
	$modeli_vetures = $_POST['modelivetures'];
	
	$koha_marrjes = $_POST['kohamarrjes'];
	
	$koha_kthimit = $_POST['kohakthimit'];
	
	$vendi_juaj = $_POST['vendi'];
	
	$kerkesa_juaj = $_POST['kerkesa'];
	
	
	$to ='agnesaaseniku@gmail.com';
	$subject = 'Mesazh nga: KLIENTET';
	$msg = "$emri_juaj Emri $email_juaj email $numri_telefonit.\n".
                "numri telefonit: $adresa_juaj\n". 
                "adresa juaj: $modeli_vetures\n". 
                "modeli i vetures: $koha_marrjes\n" .
                "Koha e marrjes: $koha_kthimit\n" .
                "Koha e kthimit: $kerkesa_juaj";


                mail($to,
                     $subject,
                     $msg, 'Nga:' . $email_juaj);




$dbc = mysqli_connect('localhost','root','','databaza_rezervo_veturen')
			or die ('Gabim gjate lidhjes me serverin MySQL.');
			
			$query = "INSERT INTO rezervimet_klienteve (emri_juaj, 										                										mbiemri_juaj, ".
			"email_juaj, numri_telefonit, adresa_juaj, modeli_vetures, ".
			"koha_marrjes, koha_kthimit, vendi_juaj , kerkesa_juaj) " . 
			"VALUES ('$emri_juaj','$mbiemri_juaj','$email_juaj', ". "'$numri_telefonit', '$adresa_juaj',' $modeli_vetures'," .
			"'$koha_marrjes','$koha_kthimit',' $vendi_juaj' , '$kerkesa_juaj')";
			
			
			$result = mysqli_query($dbc,$query)
					or die ('Gabim gjate dergimi te query-it ne baze te shenimeve');
					
	mysqli_close($dbc);


echo '<h2>Kërkesa e juaj u dërgua me sukses,</h2> <br/><h3>Ju kerkuat:</h3>';
echo '<b>Modeli i Vetuës</b>: ' .$modeli_vetures .'<br/>';
echo '<b>Data e Marrjës</b>: ' .$koha_marrjes.'<br/>';
echo '<b>Data e Kthimit</b>: ' .$koha_kthimit;

/*echo 'Emri: ' .$emri_juaj;
echo 'Mbiemri: ' .$mbiemri_juaj. '<br/>';
echo 'E-mail: ' .$email_juaj.'<br/>';
echo 'Nr. Telefonit: ' .$numri_telefinit.'<br/>';
echo 'Vendi Juaj: ' .$adresa_juaj . '<br/>';


echo '' .$koha_kthimit;
echo '' .$vendi_juaj;
echo '' .$kerkesa_juaj;

	*/







?>

</body>
</html>
