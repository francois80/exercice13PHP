<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Exercice 13 PHP</title>
</head>
<body>
<div class="container">
	<h1>Afficher les nombres de 1 à 100. En remplaçant le nombre par un mot selon certaines conditions :</h1>
	<h2>
		Le mot Fizz s'il est multiple de 3</br>
		Le mot Buzz s'il est multiple de 5</br>
		Le mot FizzBuzz s'il est multiple de 3 et de 5
	</h2>
	<?php
	for ($i=1; $i <= 100 ; $i++) {
		if(($i % 3) == 0 And ($i % 5) != 0){?>
			<p class="alert alert-primary" role="alert">Fizz (multiple de 3)</p>
	<?php	}
			elseif(($i % 5) == 0 And ($i % 3) != 0){ ?>
				<p class="alert alert-dark" role="alert">Buzz (multiple de 5)</p>
	<?php		}
				elseif(($i % 3) == 0 And ($i % 5) == 0){ ?>
					<p class="alert-warning" role="alert">FizzBuzz (multiple de 3 et de 5)</p>
	<?php			}
					else { ?>
						<p><?= $i ?></p>
	<?php		}
} ?>


</div>
</body>
</html>
