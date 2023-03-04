<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre>';

$email=$_POST['email'];
$name=$_POST['name'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$msg=wordwrap($message,70);

$to="lamoshe.saad@gmail.com";
$header="From:$email";

mail($to,$subject,$msg,$header);

 header("Location: ../index.php");
?>