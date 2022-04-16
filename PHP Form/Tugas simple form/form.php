<!DOCTYPE html>
<html>
<head>
</head>
<body>

<h2>Student Union Form</h2>
<form method="post" action="proses.php">
	<table>
		<tr>
			<td>Name</td>
			<td>:</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>E-mail</td>
			<td>:</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Website</td>
			<td>:</td>
			<td><input type="text" name="website"></td>
		</tr>
		<tr>
			<td>Comment</td>
			<td>:</td>
			<td><textarea name="comment" rows="5" cols="40"></textarea></td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>:</td>
			<td>
				<input type="radio" name="gender" value="female">Female
				<input type="radio" name="gender" value="male">Male
				<input type="radio" name="gender" value="other">Other
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="submit"></td>
		</tr>
	</table>
</form>

</body>
</html>