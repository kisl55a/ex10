<?php include "menu.php"; ?>
<?php
	require 'library_db.php';
	print_r($_POST); 

	$stmt=$db->prepare("INSERT INTO books (books_id,books_name,author,isbn) 
	VALUES(:idBook,:naBook,:auBook,:isBook)"); 
	$stmt->bindParam(':idBook', $b_id); 
	$stmt->bindParam(':naBook', $b_name); 
	$stmt->bindParam(':auBook', $b_author); 
	$stmt->bindParam(':isBook', $b_isbn); 
	$b_id=$_POST['b_id']; 
	$b_name=$_POST['b_name']; 
	$b_author=$_POST['b_author']; 
	$b_isbn=$_POST['b_isbn']; 
	
	$stmt->execute(); 

	?>