<?php
	try
	{
	 $dsn = "mysql:host=localhost;dbname=library";
	 $db = new PDO ($dsn, "lib_user", "Xmas754zx");
	 print ("Connected\n");
	}
	catch (PDOException $e)
	{
	 print ("Cannot connect to server\n");
	 print ("Error code: " . $e->getCode () . "\n");
	 print ("Error message: " . $e->getMessage () . "\n");
	}
	?>