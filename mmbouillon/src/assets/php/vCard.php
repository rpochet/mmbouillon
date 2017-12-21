<?php 
$config = require 'assets/php/config.php';
$personnes = require 'assets/php/personnes.php';
if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $personne = $personnes[$id];
} else {
    $personne = new Personne();
    $personne->firstName = $config['title'];
    $personne->gsm = $config['phone'];
    $personne->email = $$config['email'];
}
?>

<?php 
header('Content-Type: text/x-vcard;charset=utf-8;');
header('Content-Disposition: inline; filename= "mmbouillon.vcf"');
header("Pragma: no-cache");
?>

BEGIN:VCARD
N:<?php echo $personne->firstName.' '.$personne->lastName ?>;;;;
ADR;INTL;PARCEL;WORK:;;<?php $config['address']['street']; ?>;<?php $config['address']['city']; ?>;;<?php $config['address']['postalCode']; ?>;<?php $config['address']['country']; ?>;
EMAIL;INTERNET:<?php echo $personne->email ?>;
ORG:<?php echo $personne->firstName.' '.$personne->lastName ?>;
TEL;WORK:<?php echo $personne->gsm ?>;
TEL;FAX;WORK:<?php echo $config['fax']; ?>;
URL;WORK:<?php echo $config['web']; ?>;
CATEGORIES:Personal,Business,Family;
PHOTO;TYPE=JPEG;VALUE=URI:<?php echo $config['web']; ?>img/logo_mmb.png;
END:VCARD
