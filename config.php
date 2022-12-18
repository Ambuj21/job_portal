<?php
// to connect database we need server name, username, database name, password 
$server = "localhost";
$username = "root";
$password = "";
$database = "jobs";

$conn = mysqli_connect($server, $username, $password, $database);

if($conn->connect_error)
{
      die("connection failed:". $conn->connect_error);
}
echo "Connected successfully";

if(isset($_POST["Submit"]))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['phone_no']; 
    $password = $_POST['password'];

    $sql = "INSERT INTO `users` (`name`, `email`, `password`, `phone_no`) VALUES ('$name','$email', '$password', '$number');";

    if(mysqli_query($conn, $sql)) 
    {
        echo "Record succesfully Inserted.";
        // header("location : index.php");
    }
    else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
if(isset($_POST['Login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE `email` = '$email' AND `password` = '$password' ";
        
    $result = mysqli_query($conn, $query); // we are running the upper query at the connected server
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC); // check if row is empty or not
    
    if($row)
    {   
        header("location:index.php"); // used to redirect to the located pade
    }
    else
    {
        $error = "email id or password is incorrect";
        echo $error;
    }
}
if(isset($_POST['job']))
{
    $cname = $_POST['cname'];
    $pos = $_POST['pos'];
    $jobdesc = $_POST['jobdesc'];
    $skills = $_POST['skills'];
    $ctc = $_POST['CTC'];
    
    $sql = "INSERT INTO `job` (`cname`,`pos`,`jobdesc`,`skills`,`CTC`) VALUES ('$cname', '$pos', '$jobdesc', '$skills', '$ctc');";
    if(mysqli_query($conn, $sql)) 
    {
        
      echo "job posted";
    }
    else{
        echo "Failed to post.";
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
if(isset($_POST['applyNow']))
{
    $name = $_POST['name'];
    $qual = $_POST['Qual'];
    $apply = $_POST['Apply'];
    $Pyear = $_POST['Year'];

    $sql = "INSERT INTO `candidates` (`name`, `qual`, `apply`, `year`) VALUES ('$name','$qual','$apply','$Pyear')";
    
    mysqli_query($conn, $sql);
}
mysqli_close($conn);
?>
