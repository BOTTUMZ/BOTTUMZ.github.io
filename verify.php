<?php
$access_token = '5Xy/eoAyzcyxkmWZSI/gBK0hq8mpXRf2jXDlzHzZSU15J8l1SqPga1fIb7FBzrI6ZFWw4/nUdWcoB6miRk0/Tk8k8pEHdkaHQBW/I5Lr/JQGzatyeGXWqhke6I9nN9RYHRL+LEPn1Rdt73a915vWTAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
