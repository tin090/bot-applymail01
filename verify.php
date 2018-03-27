

<?php
$access_token = 'tZmQOwJDanfaMyyqfcIQbfpWyOBaLzWLe4i7KA2sBLNXVlajKSqC+HOFOi1yOFxrHpkHgq5yQZuJG3O02Dp3SpWKEcRGnmRvTkw4r5yAtQUEFbpOpx9UfsCxEpj9mu5EqtmEA1dxy/Lj/lg5GScX1QdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);echo $result;

?>
