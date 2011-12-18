<html>

<head>
	<title>418 I'm a teapot</title>
</head>
<body>
	<h1>HTCPCP error 418: I'm a teapot</h1>
	<p>The requested URL cannot provide coffee, because this is a networked teapot. See RFC2324.
		<form action="BREW" method="POST">
		<fieldset id="select_additions" class="">
			<legend>Select Additions</legend>
			<fieldset id="milk-type" class="">
				<legend>milk-type</legend>
				<input type="radio" name="milk-type" value="Non-Dairy" checked />Non-Dairy<br>
				<input type="radio" name="milk-type" value="Cream" />Cream<br>
				<input type="radio" name="milk-type" value="Half-and-half" />Half-and-half<br>
				<input type="radio" name="milk-type" value="Whole-milk" />Whole-milk<br>
				<input type="radio" name="milk-type" value="Part-Skim" />Part-Skim<br>
				<input type="radio" name="milk-type" value="Skim" />Skim<br>
			</fieldset>
			<fieldset id="syrup-type" class="">
				<legend>syrup-type</legend>
				<input type="radio" name="syrup-type" value="None" checked />None<br>
				<input type="radio" name="syrup-type" value="Vanilla" />Vanilla<br>
				<input type="radio" name="syrup-type" value="Almond" />Almond<br>
				<input type="radio" name="syrup-type" value="Raspberry" />Raspberry<br>
				<input type="radio" name="syrup-type" value="Chocolate" />Chocolate<br>
			</fieldset>
			<fieldset id="alcohol-type" class="">
				<legend>alcohol-type</legend>
				<input type="radio" name="alcohol-type" value="None" checked />None<br>
				<input type="radio" name="alcohol-type" value="Whiskey" />Whiskey<br>
				<input type="radio" name="alcohol-type" value="Rum" />Rum<br>
				<input type="radio" name="alcohol-type" value="Kahlua" />Kahlua<br>
				<input type="radio" name="alcohol-type" value="Aquavit" />Aquavit<br>
			</fieldset>
			<br><input type="submit" />
		</fieldset>
		</form>
	<hr>
	<address>
	<?
	$ver = split("[/ ]",$_SERVER['SERVER_SOFTWARE']);
	$pvm= $_SERVER['HTTP_HOST'];
	   $apver = "$ver[1] $ver[2]";
	   echo "Apache/".$apver." mod_Teapot/0.42 PHP/".PHP_VERSION." Server at $pvm Port 80";
	?></address>

	<br><a href="/"><font color=#ffffff>&pi;</font></a></font>
</body>

</html>