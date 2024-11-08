<?php
include "db.php";

if(ISSET($_GET['id_no']))

{
    $id_no = intval($_GET['id_no']);

    $sql = "DELETE FROM products WHERE id_no= $id_no";

    if($connection->query($sql)==TRUE)
    {
        header("Location: show_details.php");
    }

    }
    ?> 