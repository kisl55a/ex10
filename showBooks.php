<?php include "menu.php"; ?>
	<h2>Books</h2>
	<?php include "library_db.php"?>

<h2> Books</h2>
<table border="1">
    <thead>
        <tr>
            <th>Books_id</th> <th>name</th> <th> Author</th> <th>isbn</th>
        </tr>
    </thead>
    <tbody>
    <?php
$sql="SELECT * FROM books";
$books=$db->query($sql);
foreach($books as $row){
    echo'<tr>';
    echo'<td>'.$row['books_id'].'</td>';
    echo'<td>'.$row['books_name'].'</td>';
    echo'<td>'.$row['author'].'</td>';
    echo'<td>' .$row['isbn'].'<br>';
}
?>
    </tbody>
</table>

	<?php include "footer.php"; ?>