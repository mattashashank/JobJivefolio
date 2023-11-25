<?php

$server='localhost';
$username='root';
$password='';
$database='test_website';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error)
 {
    die("Connection failed:".$conn->connect_error);
 }
 echo"";

 if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['phone_no'];
    $password=$_POST['password'];

    $reg="INSERT INTO `users`(`Name`, `email`, `password`,`phone_no`) VALUES ('$name','$email','$password','$number')";
    
    if(mysqli_query($conn,$reg))
    {echo"Records inserted sucessfully.";}
    else
    {
        echo"ERROR: Could not able to execute $reg." .mysqli_error($conn);
    }
 }

 session_start();
if(isset($_POST['Login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
    $result= mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

    if(mysqli_num_rows($result)==1){
      header("location:index.php");
    }
    else{
        $error='emailid or password is incorrect';
    }
} 

if(isset($_POST['job']))
{
    $cname=$_POST['cname'];
    $pos=$_POST['pos'];
    $jdesc=$_POST['jdesc'];
    $skills=$_POST['skills'];
    $CTC=$_POST['CTC'];

    $job1="INSERT INTO `jobs`(`cname`, `position`, `jdesc`, `skills`, `CTC`) VALUES ('$cname','$pos','$jdesc','$skills','$CTC')";
    if(mysqli_query($conn,$job1))
    {
         echo"New Job Posted";

    }
    else {
    
        echo"ERROR: Failed to Post the Job $job1." .mysqli_error($conn);
    }
}

if(isset($_POST['new_apply']))
{
    $name=$_POST['name'];
    $qual=$_POST['qual'];
    $apply=$_POST['apply'];
    $year=$_POST['year'];
    $sql1="INSERT INTO `candidates`( `name`, `apply`, `qual`, `year`) VALUES ('$name','$apply','$qual','$year')";
    var_dump($sql1);
    die();
    mysqli_query($conn,$sql1);
}

 ?>