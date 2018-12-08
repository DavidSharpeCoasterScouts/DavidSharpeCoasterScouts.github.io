<?php 

if (isset($_POST['submit'])){
    $name=$_POST['name'];
    $subject=$_POST['subject'];
    $mailFrom=$_POST['mail'];
    $message=$_POST['message'];

    $mailTo="coasterscouts@outlook.com";
    $headers="From: ".$mailFrom;
    $txt="You have received an e-mail from ".$name.".\n\n".$message;

    if (mail($mailTo, $subject, $txt, $headers)){echo "<h1>Sent Successfully! Thank You"."".$name.",We will contact you shortly!</h1>";} else {echo "Something went wrong! Please try again some other time"};
    header("Location: CoasterScoutsContactMe.php?mailsend");
}?>
