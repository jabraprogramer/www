<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<form action="site.php" method="post">
			User name :<input type="text" name="user"><br>
			male :<input type="checkbox" name="male"><br>
			female :<input type="checkbox" name="femal"><br>
			<input type="submit">

		</form>

		<?php
		

			if($_POST["male"]==true){
				$MOF = "Male";
			}else {
				$MOF = "Female";
			}

			function sayhi($name){
				echo "hello $name<br>";
			}

			function his_hight($name){
				echo "$name hight is very high<br>";
			}

			function his_gender($name,$mof){
				echo "$name gender is $mof";
			}

			sayhi($_POST["user"]);
			his_hight($_POST["user"]);
			his_gender($_POST["user"],$MOF);

		?>

	</body>
	</html>
