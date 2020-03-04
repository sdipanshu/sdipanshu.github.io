<!DOCTYPE html>
<html>
	<head>
		<title> Indian Railinfo </title>
		<style>
		body{
			text-align: center;
		}
		</style>
	</head>
	<body>	
		<br>
		<form action="./train.php" method="POST">
			Enter train number :
			<input type="text" name="train_name" id="fileToUpload" required="required">
			<input type="submit" value="Submit" name="submit">
		</form>
		
		<div>
		<br>
			Click on the different types of query you want to use..<br><br>
			<a href="./Station.php"> Train between 2 stations  </a><br>
			<a href="./via.php"> Train from source to destination via 1 lay_over </a><br>
			<a href="./booking.php"> Book and rate train  </a><br>
		</div>
	</body>
	</html>

