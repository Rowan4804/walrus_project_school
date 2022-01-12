<?php

if (isset($_POST['verzenden'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $subject = $_POST['subject'];
    $locatie = $_POST['locatie'];
    $message = $_POST['message'];

$con = mysqli_connect('localhost', 'root', '','contact_formulier');

    $mailTo = "230779@edu.rocfriesepoort.nl";
    $headers = "From: ".$mailFrom;
    $txt = "U hebt een email ontvangen van ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend"); 

}

//$sql = "INSERT INTO `formulier_tabel` (`Naam`, `Mail`, `Subject`, `Locatie`, `Message`) VALUES ('$name', $mailFrom, $subject, $locatie, $message)";
$sql = "INSERT INTO `formulier_tabel` (`Naam`, `Mail`, `Subject`, `Locatie`, `Message`) VALUES ('naam', $mailFrom, $subject, $locatie, $message)";
 
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}
