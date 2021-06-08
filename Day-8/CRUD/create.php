<?php
if($_POST){

    include 'config/database.php';

     $name=$_POST['name'];
        $enrolment_no=$_POST['enrolment_no'];
        $branch=$_POST['branch'];
        $email=$_POST['email'];
        
    $q = mysqli_query($connection,
        "insert into stud SET name='{$name}', enrolment_no='{$enrolment_no}', branch='{$branch}', email='{$email}'") or die("Error". mysqli_error($connection));

     if($q){
            echo "<div class='alert alert-success'>Record was saved.</div>";
        }else{
            echo "<div class='alert alert-danger'>Unable to save record.</div>";
        }          
}
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />   
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>Create Student</h1>
    </div>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <table class='table table-hover table-responsive table-bordered'>
            <tr>
                <td>Name</td>
                <td><input type='text' name='name' class='form-control' /></td>
            </tr>
            <tr>
                <td>Enrolment Number</td>
                <td><input type='Number' name='enrolment_no' class='form-control' /></td>
            </tr>
            <tr>
                <td>Branch</td>
                <td><input type='text' name='branch' class='form-control' /></td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type='Email' name='email' class='form-control' /></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type='submit' value='Save' class='btn btn-primary' />
                    <a href='index.php' class='btn btn-danger'>Back to read products</a>
                </td>
            </tr>
        </table>
    </form>    
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>