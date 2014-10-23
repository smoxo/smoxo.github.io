<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title>smox 'webdesigner'</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<?php
if(isset($_POST['chnom'])&&($_POST['chmail']))
{

$recuper_nom=$_POST['chnom'];
$recuper_mail=$_POST['chmail'];
$recuper_message=$_POST['chmessage'];

 $headers ='From: "Contact site : k-smox.com "<k-smox@hotmail.fr>'."\n"; 
     $headers .='Reply-To: k-smox@hotmail.fr'."\n"; 
     $headers .='Content-Type: text/plain; charset="iso-8859-1"'."\n"; 
     $headers .='Content-Transfer-Encoding: 8bit'; 
$msg="
Client         :".$recuper_nom."
E-mail         :".$recuper_mail."
Message        :".$recuper_message."
";

//print($msg);
 if(mail('k_mohammed@hotmail.fr', 'Client', $msg, $headers)) 
     { 
	 ?>
     <script language="javascript">
	 alert('Le message a bien été envoyé');
	  location.href="http://k-smox.com/"
	 </script>
          <?php
     } 
     else 
     { 
	  ?>
	 <script language="javascript">
	 alert('Le message n\'a pas pu être envoyé');
	   location.href="http://k-smox.com/"
	 </script>
        <?php  
     } 
}
	?>