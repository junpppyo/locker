<?php   
include "./db.php"; ?>
<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<title>sign up and login</title>
</head>
<body>
	<div id="login_box">
		<h1>login</h1>							
			<form method="post" action="login.php">
				<table align="center" border="0" cellspacing="0" width="300">
        			<tr>
            			<td width="130" colspan="1"> 
                		<input type="text" name="userid" class="inph">
            		</td>
            		<td rowspan="2" align="center" width="100" > 
                		<button type="submit" id="btn" >login</button>
            		</td>
        		</tr>
        		<tr>
            		<td width="130" colspan="1"> 
               		<input type="password" name="userpw" class="inph">
            	</td>
        	</tr>
        	<tr>
           		<td colspan="3" align="center" class="mem"> 
              	<a href="./signup.php">sign up?</a>
           </td>
        </tr>
    </table>
  </form>
</div>
</body>
</html>



