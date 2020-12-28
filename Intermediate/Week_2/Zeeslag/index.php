<?php
session_start(); 
if(isset($_SESSION['hit']))
{
	if($_SESSION['hit'] == "missed")
	{
		
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zeeslag</title>
<style>	
  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

</style>
</head>

<body>
	<table style="width: 100%">
		<tr>
			<th>A0</th>
			<th>A1</th>
			<th>A2</th>
			<th>A3</th>
			<th>A4</th>
			<th>A5</th>
			<th>A6</th>
			<th>A7</th>
			<th>A8</th>
			<th>A9</th>
		</tr>
		<tr>
			<th>B0</th>
			<th>B1</th>
			<th>B2</th>
			<th>B3</th>
			<th>B4</th>
			<th>B5</th>
			<th>B6</th>
			<th>B7</th>
			<th>B8</th>
			<th>B9</th>
		</tr>
		<tr>
			<th>C0</th>
			<th>C1</th>
			<th>C2</th>
			<th>C3</th>
			<th>C4</th>
			<th>C5</th>
			<th>C6</th>
			<th>C7</th>
			<th>C8</th>
			<th>C9</th>
		</tr>
		<tr>
			<th>D0</th>
			<th>D1</th>
			<th>D2</th>
			<th>D3</th>
			<th>D4</th>
			<th>D5</th>
			<th>D6</th>
			<th>D7</th>
			<th>D8</th>
			<th>D9</th>
		</tr>
		<tr>
			<th>E0</th>
			<th>E1</th>
			<th>E2</th>
			<th>E3</th>
			<th>E4</th>
			<th>E5</th>
			<th>E6</th>
			<th>E7</th>
			<th>E8</th>
			<th>E9</th>
		</tr>
		<tr>
			<th>F0</th>
			<th>F1</th>
			<th>F2</th>
			<th>F3</th>
			<th>F4</th>
			<th>F5</th>
			<th>F6</th>
			<th>F7</th>
			<th>F8</th>
			<th>F9</th>
		</tr>
		<tr>
			<th>G0</th>
			<th>G1</th>
			<th>G2</th>
			<th>G3</th>
			<th>G4</th>
			<th>G5</th>
			<th>G6</th>
			<th>G7</th>
			<th>G8</th>
			<th>G9</th>
		</tr>
		<tr>
			<th>H0</th>
			<th>H1</th>
			<th>H2</th>
			<th>H3</th>
			<th>H4</th>
			<th>H5</th>
			<th>H6</th>
			<th>H7</th>
			<th>H8</th>
			<th>H9</th>
		</tr>
		<tr>
			<th>I0</th>
			<th>I1</th>
			<th>I2</th>
			<th>I3</th>
			<th>I4</th>
			<th>I5</th>
			<th>I6</th>
			<th>I7</th>
			<th>I8</th>
			<th>I9</th>
		</tr>
		<tr>
			<th>J0</th>
			<th>J1</th>
			<th>J2</th>
			<th>J3</th>
			<th>J4</th>
			<th>J5</th>
			<th>J6</th>
			<th>J7</th>
			<th>J8</th>
			<th>J9</th>
		</tr>
	</table>
	<br><br>
	<form method="GET" action="shoot.php">
		<label for"choice">Shoot:</label>
		<select id="letters" name="letters">
			<option value=""></option>
			<option value="A">A</option>
			<option value="B">B</option>
			<option value="C">C</option>
			<option value="D">D</option>
			<option value="E">E</option>
			<option value="F">F</option>
			<option value="G">G</option>
			<option value="H">H</option>
			<option value="I">I</option>
			<option value="J">J</option>
		</select>
		<select id="numbers" name="numbers">
			<option value=""></option>
			<option value="0">0</option>
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
			<option value="5">5</option>
			<option value="6">6</option>
			<option value="7">7</option>
			<option value="8">8</option>
			<option value="9">9</option>
		</select>
		<input type="submit" value="submit"></input>
		<input type="submit" value="reset" name="reset" id="reset">
	</form>
</body>
</html>