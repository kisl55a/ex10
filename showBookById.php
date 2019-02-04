<?php include "menu.php"; ?>
<?php include "library_db.php"; ?>
<h2>Show books by id</h2>
<form action="showBookById1.php" method="POST">
	<label>Give book_id</label>
	<input type="text" name="abook" size="20">
	<input type="submit" value="Click" name="myButton" >
	</form>


<?php include "footer.php"; ?>