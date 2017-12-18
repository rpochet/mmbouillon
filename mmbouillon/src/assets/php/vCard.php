<?php 
$config = require 'config.php';
?>

<?php 
header('Content-Type: text/x-vcard;charset=utf-8;');
header('Content-Disposition: inline; filename= "mmbouillon.vcf"');
header("Pragma: no-cache");
?>

BEGIN:VCARD
N:<?php echo $config['title'] ?>;;;;
ADR;INTL;PARCEL;WORK:;;<?php $config['address']['street']; ?>;<?php $config['address']['city']; ?>;;<?php $config['address']['postalCode']; ?>;<?php $config['address']['country']; ?>;
EMAIL;INTERNET:<?php echo $config['email']; ?>;
ORG:<?php echo $config['title']; ?>;
TEL;WORK:<?php echo $config['phone']; ?>;
TEL;FAX;WORK:<?php echo $config['fax']; ?>;
URL;WORK:<?php echo $config['web']; ?>;
CATEGORIES:Personal,Business,Family;
PHOTO;TYPE=JPEG;VALUE=URI:<?php echo $config['web']; ?>img/logo_mmb.png;
END:VCARD
