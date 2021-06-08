<!DOCTYPE HTML>
<html>
<head>
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Read Student</h1>
        </div>
    <?php
    $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

    include 'config/database.php';

    $action = isset($_GET['action']) ? $_GET['action'] : "";

    if($action=='deleted'){
        echo "<div class='alert alert-success'>Record was deleted.</div>";
    }

    $q = mysqli_query($connection,
        "select * from stud where is_delete = 0 and id = '{$id}'") or die("Error". mysqli_error($connection));
 
    $row = mysqli_fetch_array($q);

    extract($row);
    ?>
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Name</td>
            <td><?php echo "{$name}";  ?></td>
        </tr>
        <tr>
            <td>Enrolment number</td>
            <td><?php echo "{$enrolment_no}";  ?></td>
        </tr>
        <tr>
            <td>Branch</td>
            <td><?php echo "{$branch}";  ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo "{$email}";  ?></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <a href='index.php' class='btn btn-danger'>Back to read Students</a>
            </td>
        </tr>
    </table>
</div> 
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>