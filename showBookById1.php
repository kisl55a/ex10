<?php include "menu.php"; ?>
<?php
    
	require 'library_db.php';
	$selection=$_POST['book_id'];
	$stmt = $db->prepare("SELECT book_name, author, isbn FROM books WHERE book_id = :id");
	$stmt->bindParam(':id',$selection);
	$stmt->execute();
	$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if (isset($_POST['myButton']))
	{
		foreach ($result as $row) {
			echo $row['book_name'].' '.$row['author'].' '.$row['isbn'].'<br/>';
		}
	}
	?>