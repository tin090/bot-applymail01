<?php
/*
$access_token = '6HNImmTgHrBGex4FsfYsp7ytuJaedYuDCCaitM0EfYr/e4lVHoizt0d2bHtbd3isHpkHgq5yQZuJG3O02Dp3SpWKEcRGnmRvTkw4r5yAtQUcxndxD66fXJcqVgKtKns7rsDlqxaCuzEF1hwfgo+qowdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/oauth2/v2.1/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

$result = curl_exec($ch);
curl_close($ch);
echo $result;
*/

curl -v -X GET \'https://api.line.me/oauth2/v2.1/verify?access_token=6HNImmTgHrBGex4FsfYsp7ytuJaedYuDCCaitM0EfYr/e4lVHoizt0d2bHtbd3isHpkHgq5yQZuJG3O02Dp3SpWKEcRGnmRvTkw4r5yAtQUcxndxD66fXJcqVgKtKns7rsDlqxaCuzEF1hwfgo+qowdB04t89/1O/w1cDnyilFU=';
?>
