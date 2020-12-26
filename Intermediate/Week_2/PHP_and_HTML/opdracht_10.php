<?php
session_start();

$formData = $_POST['email']; 


function validateMail($formData)
{
	if(!isset($formData))
	{
		echo "$formData cannot be empty";
	}
	else
	{
		if(!filter_var($formData, FILTER_VALIDATE_EMAIL))
		{
			echo "ERROR, is niet een mail.";
		}
		else
		{
			list ($user, $domain) = explode('@', $formData);
			if($domain == 'student.kdg.be')
			{
				echo "OK";
			}
			else if($domain == 'kdg.be')
			{
				echo "OK";
			}
			else
			{
				echo "ERROR, niet een KdG mail.";
			}
		}

	}
}

validateMail($formData);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Opdracht 10</title>
</head>

<body>
</body>
</html>
