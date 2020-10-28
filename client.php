<?php
require_once('lib/nusoap.php');
$wsdl = "http://webservices.oorsprong.org/websamples.countryinfo/CountryInfoService.wso?WSDL";


$client = new nusoap_client($wsdl, 'wsdl');
$err = $client->getError();
if ($err) {
   echo '<h2>L\'erreur est :</h2>' . $err;
   exit();
}

$result=$client->call('CountryIntPhoneCode', array('sCountryISOCode'=>'TN'));

echo 'The phone code of TUNISIA is <strong>'.($result['CountryIntPhoneCodeResult']).'</strong><br>';
?>