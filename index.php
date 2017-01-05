<?php require("./oauth_info.php") ?>
<!doctype html>
<html>
<head>
    <title>Tistory OAuth Sample</title>
    <style>
    .form { text-align:center; padding: 100px }
    .btn { padding:20px; font-size:24px }
    </style>
</head>
<body>
	<form class="form" method="GET" action="https://www.tistory.com/oauth/authorize/">
		<input type="hidden" name="client_id" value="<?=$client_id?>"/>
		<input type="hidden" name="redirect_uri" value="<?=$redirect_uri?>"/>
		<input type="hidden" name="response_type" value="code"/> <!-- 이단계에서는 "code" 라고 반드시 입력 -->
	    <button class="btn" type="submit">Request Athorization Code</button>
	</form>
</body>
</html>
