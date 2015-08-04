<?php defined('BASEPATH') OR exit('No direct script access allowed');

	


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>{{ title }}</title>
</head>
<body>
	
		<form action="">
		<table align="center" style="padding:10">
			<tr>
				<td>Hotel Name(Optional)</td>
				<td>City</td>
			</tr>
			<tr>
				<td><input type="text" name="hotel_name"/></td>
				<td><input type="text" name="city"/></td>
			</tr>
			<tr>
				<td>Check-In</td>
				<td>Nights</td>
				<td>Check-Out</td>
				<td># of Rooms</td>
			</tr>
			<tr>
				<td><input type="text" name="check-in"/></td>
				<td>
					<select name="nights" id="">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</td>
				<td><input type="text" name="check-out"/></td>
				<td>
					<select name="nights" id="">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Guest From</td>
				<td>Show Per Page</td>
				<td>Sort By</td>
			</tr>
			<tr>
				<td>
					<select name="nights" id="">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</td>
				<td>
					<select name="nights" id="">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</td>
				<td>
					<select name="nights" id="">
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit" value="Search"/></td>
				<td></td>
			</tr>
		</table>
		</form>
	
</body>
</html>