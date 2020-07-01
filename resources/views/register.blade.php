<!DOCTYPE html>
<html>
 <head>
	<title>Buat Account Baru!</title>
	<meta charset="UTF-8">
 </head>
 
 <body>
  <form action="/welcome">
	<h1>Buat Account Baru!</h1>
	<h3>Sign Up Form</h3>
	 <label for="nama1">First Name</label> 
	 <br><br>
	 <input type="text" id="nama1">
	 <br><br>
	 <label for="nama2">Last Name</label> 
	 <br><br>
	 <input type="text" id="nama2">
	 <br><br>
	<label>Gender</label> <br>
	 <input type="radio" name="Gender" value="0"> Male <br>
	 <input type="radio" name="Gender" value="1"> Female <br>
	 <input type="radio" name="Gender" value="2"> Other <br>
	 <br>
	<label>Nationality:</label> 
	<br><br>
	<select>
		<optgroup>
			<option value="Ina">Indonesia</option>
			<option value="Sg">Singapore</option>
			<option value="Mly">Malaysia</option>
			<option value="Ausi">Australia</option>
		</optgroup>
	</select>
	<br><br>
	<label>Language Spoken:</label><br>
	 <input type="checkbox" name="bahasa_user" value="0">Bahasa Indonesia <br>
	 <input type="checkbox" name="bahasa_user" value="1">English<br>
	 <input type="checkbox" name="bahasa_user" value="2">Other<br>
	 <br>
	<label>Bio:</label><br>
	 <textarea cols="40" rows="10"></textarea>
	 <br>
	<input type="submit" value="Sign Up">
  </form>
 </body>
</html>

