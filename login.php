<?php
	include "./db.php";

	$pw = $_POST['userpw'];
	$query = "select * from member where num='".$_POST['userid']."';";

	$result = mq($query);
	
	$member = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$hash_pw = $member['pw'];

	if(password_verify($pw, $hash_pw)) {
		$_SESSION['username'] = $member["name"];
		$_SESSION['userpw'] = $member["pw"];
		$_SESSION['usernum'] = $member["num"];

		echo "<script>alert('로그인성공'); location.href='main.php';</script>";
	}
	else {
		echo "<script>alert('로그인실패'); history.back();</script>";
	}

?>
