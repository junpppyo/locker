<?php
	include "./db.php";
//	include "../password.php";
	$userpw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
	$username = $_POST['name'];
	$number = $_POST['number'];
	

	$sql = mq("insert into member(name,pw,num) values('".$username."', '".$userpw."','".$number."');");
?>
<meta charset="utf-8" />
<script type="text/javascript">alert('회원가입이 완료되었습니다.');</script>
<meta http-equiv="refresh" content="0 url=/">
