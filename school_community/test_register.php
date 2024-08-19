<?php 

include 'database.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $matric=$_POST['matric'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkMatric="SELECT * From users where matric='$matric'";
     $result=$conn->query($checkMatric);
     if($result->num_rows>0){
        echo "Matric Number Address Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO users(firstName,lastName,matric,email,password)
                       VALUES ('$firstName','$lastName','$matric','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: test_index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

    }

if(isset($_POST['signIn'])){
   $matric=$_POST['matric'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM users WHERE matric='$matric' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['matric']=$row['matric'];
    header("Location: school_dashboard.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Matric Number or Password";
   }

}