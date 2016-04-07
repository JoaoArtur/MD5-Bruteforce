<?php 
	$file = htmlspecialchars($_POST['wordlist']);
	$hash = htmlspecialchars($_POST['hash']);
	$filesline = explode("\n",file_get_contents($file));
?>
<html>
<head>
    <title>MD5 Bruteforce</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
</head>
<body>
	<center>
		<form method="post">
			<h1>MD5 Bruteforce</h1>
			<h2>Coded by K3N1</h2>
			<h2>Designed by ZanutSec</h2>
			<h3>Trying to brute: <?=$hash?></h3>
			<br />
			<?php
				foreach ($filesline as $line) {
					$line2 = md5($line);
					if ($stoped == false) {
						if ($hash == $line2) {
							echo "<p class='ok'>[+] The hash {$hash} means: <span class='okspan'>{$line}</span></p>";
							$stoped=true;
						} else {
							echo "<p class='notok'>[-] Trying to get the mean of <span class='notokspan'>{$hash}</span></p>";
							$stoped=false;
						}
					}
				}
			?>
		</form>
<?php 
					if ($stoped == false) {
						?>
							<p class='notok'>It was not possible to crack <?=$hash?></p>
						<?php
					} ?>
	</center>
</body>
</html>