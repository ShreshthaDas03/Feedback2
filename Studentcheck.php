<?php
    $u= $_POST['T_username'];
    $p= $_POST['T_password'];
    $c=0;
    $con=  mysqli_connect('localhost','root','seedit','FeedbackSystem');
    $q="select * from S_register";
    $rs=mysqli_query($con,$q);
    while($row=mysqli_fetch_array($rs))
    {
    if($row['username']==$u && $row['password']==$p)
    {
        $c=$c+1;
    }
}
   if($c==0)
   {
    echo"Invalid UserName or Password";
    echo"<script>window.location='index.html'</script>";
   }
   else{
    session_start();
    $_SESSION['k']=$u;
    if(isset($_SESSION['k']))
    {
    echo"<script>window.location='student_main_page.html'</script>";
    }
   }
?>