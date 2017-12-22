<?php 
$config = require 'config.php';
$personnes = require 'personnes.php';

if (isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $personne = $personnes[$id];
    $vCardName = $personne->firstName.' '.$personne->lastName.'.vcf';
} else {
    $personne = new Personne();
    $personne->firstName = $config['title'];
    $personne->gsm = $config['phone'];
    $personne->email = $$config['email'];
    $vCardName = 'mmbouillon.vcf';
}
?>

<?php 
header('Content-Type: text/x-vcard;charset=utf-8;');
header('Content-Disposition: inline; filename= "'.$vCardName.'"');
header("Pragma: no-cache");
?>

BEGIN:VCARD
N:<?php echo $personne->firstName.' '.$personne->lastName ?>;;;;
ADR;INTL;PARCEL;WORK:;;<?php $config['address']['street'] ?>;<?php $config['address']['city'] ?>;;<?php $config['address']['postalCode'] ?>;<?php $config['address']['country'] ?>;
EMAIL;INTERNET:<?php echo $personne->email ?? $config['email'] ?>;
ORG:<?php echo $personne->firstName.' '.$personne->lastName ?>;
TEL;WORK:<?php echo $personne->gsm ?? $config['phone'] ?>;
TEL;FAX;WORK:<?php echo $personne->fax ?? $config['fax'] ?>;
URL;WORK:<?php echo $personne->web ?? $config['web'] ?>;
CATEGORIES:Personal,Business,Family;
PHOTO;TYPE=JPEG;VALUE=URI:<?php echo $personne->avatar ?? $config['avatar'] ?>;
END:VCARD
