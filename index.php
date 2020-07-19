<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>	
<body>

	<form action="calc.php" method="POST">
		NUM 1<input type="Number" name="num1">
		NUM 2<input type="Number" name="num2">
	<select name="cal">
		<option value="add">Add</option>
		<option value="sub">Subtract</option>
		<option value="mul">Multiply</option>
		<option value="div">Divide</option>
	</select>
	<button type="submit">Calculate</button>
	</form>

</body>
</html>