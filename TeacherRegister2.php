<?php
    
    $id=$_GET['studentId'];
    $name=$_GET['name'];
    $email=$_GET['email'];
    $pmobile=$_GET['mobNo'];
    $branch=$_POST['brachName'];
    $con= mysqli_connect('localhost','root','seedit','FeedbackSystem');
    $q="insert into t_register values('$id','$name','$branch','$email','$mobile')";
    $rs=mysqli_query($con,$q);
    if($rs)
    {
        echo"Saved";
        echo"<button><a href='Teacher.php'>Go to login page</a></button>";
        session_start();
        $_SESSION['k']=$name;
    }
?>