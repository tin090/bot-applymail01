<?php

$access_token = 'MGEUJUIXTtWYMAvWXGu/kCu2tpLn++1t3Y3mT/D6LpfQbGgL25IqCb+RzcJXh7SiHpkHgq5yQZuJG3O02Dp3SpWKEcRGnmRvTkw4r5yAtQVPSDbfq31jKMky4YoQcSYJLXyHHSUqPmg3yd96LIipZwdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/oauth2/v2.1/token';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;

?>
