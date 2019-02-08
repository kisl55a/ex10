<?php include "menu.php"; ?>
<?php

$stmt=$db->prepare("DELETE FROM books WHERE 
books_id=:idBook");
		$stmt->bindParam(':idBook', $b_id);
		$b_id=$_GET['id'];
        $stmt->execute();
        echo"DELETED!"
?>
<?php include "footer.php"; ?>