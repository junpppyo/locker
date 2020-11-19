<?php  
	include "./db.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>sign up</title>
</head>
<body>
	<form method="post" action="register.php">
		<h1>sign up</h1>
			<fieldset>
				<legend></legend>
					<table>
						<tr>
							<td>student number</td>
							<td><input type="int" size="8" name="number" placeholder="학번">
						</tr>
						<tr>
							<td>pw</td>
							<td><input type="password" size="20" name="userpw" placeholder="비밀번호"></td>
						</tr>
						<tr>
							<td>name</td>
							<td><input type="text" size="10" name="name" placeholder="이름"></td>
						</tr>
					</table>

				<input type="submit" value="submit" />
				<a href="./index.php"> <input type="button" value="back"> </input>
			
		</fieldset>
	</form>
</body>
</html>

