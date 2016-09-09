<!doctype html>
<html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta name="Generator" content="EditPlus®">
  <meta name="Author" content="">
  <meta name="Keywords" content="">
  <meta name="Description" content="">
  <title>Document</title>
 </head>
 <body>
  <form method="post" action="<?php $PHP_SELF;?>">
	<label>Tour Continent</label>
	<select name="tour_continent">
		<option value="" selected></option>
		<option value="africa">Africa</option>
		<option value="antarctica">Antarctica</option>
		<option value="asia">Asia</option>
		<option value="australia">Australia</option>
		<option value="europe">Europe</option>
		<option value="soutamerica">South America</option>
	</select><br><br>
	<label>Tour Name:</label>
	<input type="text" name="tour_name"><br><br>
	<label>Departure Date:</label>
	<input type="date" name="dep_date"><br><br>
	<label>Return Date:</label>
	<input type="date" name="ret_date"><br><br>
	<label>Price :</label>
	<input type="text" name="price"><br><br>
	<label>Tour Type: </label>
	<select name="tour_type">
		<option value="" selected></option>
		<option value="air and land">Air & Land</option>
		<option value="air only">Air Only</option>
		<option value="land only">Land Only</option>
	</select><br><br>
	<label>Background Color: </label>
	<input type="color" name="bgcolor"><br><br>
	<label>Availability: </label>
	<select name="tour_available">
		<option value="" selected></option>
		<option value="available">Available</option>
		<option value="not available">Not Available</option>
	</select><br><br>
	
	<input type="submit" value="Update" name="submit">
  </form>
 </body>
</html>
