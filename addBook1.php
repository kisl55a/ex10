<?php include "menu.php"; ?>
<?php
	require 'library_db.php';
	$stmt=$db->prepare("INSERT INTO books (book_id,book_name,author) VALUES(:book_id,:book_name,:author)");
		$stmt->bindParam(':book_id', $book_id);
		$stmt->bindParam(':book_name', $book_name);
		$stmt->bindParam(':author', $author);
	$book_id=$_POST['book_id'];
	$book_name=$_POST['book_name'];
    $author=$_POST['author'];
    
    $stmt->execute();

	?>