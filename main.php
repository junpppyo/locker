<?php
include "./db.php"; ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>main</title>
	
	<style>
	h1 {
	width:30px;
	height:30px;
	background-color:#988888;
	font-size:20px;
	border:2px solid #000000;
	margin:0 auto;
	padding:10px;
}
	</style>
</head>
</body>
	<?php
	
	if(isset($_SESSION['username'])) {
		echo "{$_SESSION['username']}";
		echo " ({$_SESSION['usernum']})";
	?>
	<a href="logout.php"><br><input type="button" value="로그아웃"/> </a>
	<?php
} else {
		echo "<script>alert('잘못된 접근입니다.'); history.back();</script>";
	}
	$result = mq("SELECT no FROM seat");
	
	$a = mq("select no from seat where state=1");
	?>
	<SCRIPT language="javascript">

	var t = <?php $z = mysqli_fetch_array($a, MYSQLI_ASSOC); if($z != NULL) echo $z['no']; else echo 0; ?>;
	var n = <?= mysqli_num_rows($result) ?>;
	var desk = new Array();

	for(i=1;i<=n;i++) {
		desk[i] = new Image();
		desk[i].src = "./box.jpg";
		desk[i].id = i;
		desk[i].onclick = function() { reserve(this) };
		desk[i].tag = 0;
		if(i == t) {
			desk[i].tag = 1;
			desk[i].src = "./box2.jpg";
			var t = <?php $z = mysqli_fetch_array($a, MYSQLI_ASSOC); if($z != NULL) echo $z['no']; else echo 0; ?>;
		};
		document.body.appendChild(desk[i]);
		
		document.write("  ");
	}
	
	function reserve(desk) {
		if(desk.tag == 0) {
		}
		else if(desk.tag == 1) {
		}
		location.href="reserve.php?no="+desk.id;
	}
	
	
	</script> 
	
</body>
</html>
