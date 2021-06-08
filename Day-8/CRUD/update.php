<!DOCTYPE HTML>
<html>
<head>
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />    
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Update Student</h1>
        </div>
    <?php
        $id=isset($_GET['id']) ? $_GET['id'] : die('ERROR: Record ID not found.');

        include 'config/database.php';

        $q = mysqli_query($connection,
                "select * from stud where id = '{$id}'") or die("Error". mysqli_error($connection));

        $row = mysqli_fetch_array($q);

        $name = $row['name'];
        $enrolment_no = $row['enrolment_no'];
        $branch = $row['branch'];
        $email = $row['email'];

        if($_POST){

            $name=$_POST['name'];
            $enrolment_no=$_POST['enrolment_no'];
            $branch=$_POST['branch'];
            $email=$_POST['email'];

            $qd = mysqli_query($connection,
                "update stud set name='{$name}', enrolment_no='{$enrolment_no}', branch='{$branch}', email='{$email}' where id = '{$id}'") or die("Error". mysqli_error($connection));

            if($qd){
                echo "<div class='alert alert-success'>Record was updated.</div>";
            }else{
                echo "<div class='alert alert-danger'>Unable to update record. Please try again.</div>";
            }
        }
    ?>

<form method="post">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>Name</td>
            <td><input type='text' name='name' value="<?php echo $name;  ?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>Enrolment Number</td>
            <td><input type="Number" name='enrolment_no' value="<?php echo $enrolment_no;?>" class='form-control' /></td>
        </tr>
        <tr>
            <td>Branch</td>
            <td><input type='text' name='branch' value="<?php echo $branch;  ?>" class='form-control' /></td>
        </tr>
         <tr>
            <td>Email</td>
            <td><input type='Email' name='email' value="<?php echo $email;  ?>" class='form-control' /></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' value='Save Changes' class='btn btn-primary' />
                <a href='index.php' class='btn btn-danger'>Back to read Students</a>
            </td>
        </tr>
    </table>
</form>    
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>