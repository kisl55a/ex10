<?php include "menu.php"; ?>
<?php include "library_db.php"; ?>
<h2>Show books by id</h2>
<form action="showBookById.php" method="POST">
	<label>Give book_id</label>
	<input type="text" name="book_id" size="20">
	<input type="submit" value="Click" name="myButton" >
	</form>
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

<?php include "footer.php"; ?>