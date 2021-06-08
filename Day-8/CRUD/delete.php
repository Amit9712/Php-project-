<?php
include 'config/database.php';
 
$id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

    $q = mysqli_query($connection,
        "update stud set is_delete = 1 where id='{$id}'") or die("Error". mysqli_error($connection));

    if($q){
        header('Location: index.php?action=deleted');
    }else{
        die('Unable to delete record.');
    }
?>