<?php
require("./oauth_info.php");

$authorization_code = $_REQUEST['code'];
$grant_type = 'authorization_code';

$url = 'https://www.tistory.com/oauth/access_token/';
$param = 'code=' . $authorization_code
    . '&client_id=' . $client_id
    . '&client_secret=' . $client_secret
    . '&redirect_uri=' . urlencode($redirect_uri)
    . '&grant_type=' . $grant_type;

$curl_handle = curl_init();
curl_setopt($curl_handle, CURLOPT_URL, $url . "?" . $param);
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 1000);

ob_start();
curl_exec($curl_handle);
$result = ob_get_clean();
curl_close($curl_handle);
?>
<!doctype html>
<html>
<head>
    <title>Tistory OAuth Sample</title>
    <style>
    .result { padding:100px; text-align:center; font-size:16px }
    </style>
</head>
<body>
    <div class="result"><?=$result?></div>
</body>
</html>
