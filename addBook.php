<?php include "menu.php"; ?>
<form action="addBook1.php" method="POST">
		book_id=<input type="text" name="b_id"  /> <br/>
		book_name=<input type="text" name="b_name"  /> <br/>
		author=<input type="text" name="b_author"  /> <br/>
        isbn=<input type="text" name="b_isbn"  /> <br/>
		<input type="submit" value="Add" /> <br/>
	</form>


<?php include "footer.php"; ?>