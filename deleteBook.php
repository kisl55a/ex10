<?php include "menu.php"; ?>
<h2>Delete book</h2>
<table border="1">
    <thead>
        <tr>
            <th>Books_id</th> <th>name</th> <th> Author</th> <th>isbn</th> <th>Delete</th>
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
    echo'<td>' .$row['isbn'].'</td>';
    //delete
    echo'<td><a name="b_id" href="deleteBook1.php?id=';
    echo $row['books_id'];
    echo'&name=';
    echo $row['books_name'];
    echo'&author=';
    echo $row['author'];
    echo'&isbn=';
    echo $row['isbn'];
    echo '"><button>Delete</button></a></td>';
    //delete
     echo '</tr>';


    echo'</tr>';

}
?>
    </tbody>
</table>
<?php include "footer.php"; ?>