<?php 
/*
	$ldap_dn = "CN=adm-gerson,OU=Usuarios,OU=Datacenter,DC=battistella,DC=local";
	$ldap_password = "!*8271208Ga";
	$ldap_con = ldap_connect("battistella.local");

	if (ldap_bind($ldap_con, $ldap_dn, $ldap_password)){

		$filter = "(cn=BattPapo)";
		$result = ldap_search($ldap_con,"OU=Usuarios,OU=Curitiba,OU=Holding,DC=battistella,DC=local",$filter) or exit ("Unable to search");
		$entries = ldap_get_entries($ldap_con, $result);

		echo "<pre>";
		print_r($entries);
		echo "</pre>";

	} else {
		echo "Invalid user/pass or other errors!";
	} */

	?>
	<!DOCTYPE html>
	<html>
	<head>
		<title>LDAP</title>
	</head>
	<body>
		<h1>Autenticando com AD</h1>
		<form action="ldap.php" method="post" accept-charset="utf-8">
			<input type="text" name="username" /><br>
			<input type="password" name="password" /><br>
			<input type="submit" value="Enviar"></input>
		</form>
	</body>
	</html>