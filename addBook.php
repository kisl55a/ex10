<?php include "menu.php"; ?>
<form action="addBook1.php" method="POST">
<?php
//find the biggest books_id
$sql="select max(books_id) from books";
$result=$db->query($sql);
$max = $result->fetch(PDO::FETCH_COLUMN);

$max++;
?>
		book_id=<input type="text" name="b_id" value="<?php echo $max;?>"required /> <br/>
		book_name=<input type="text" name="b_name"  /> <br/>
		author=<input type="text" name="b_author"  /> <br/>
        isbn=<input type="text" name="b_isbn"  /> <br/>
		<input type="submit" value="Add" /> <br/>
	</form>


<?php include "footer.php"; ?>