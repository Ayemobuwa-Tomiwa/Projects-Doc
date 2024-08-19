<?php
 include 'database.php';

 if(isset($_POST['create'])){
    $name=$_POST['name'];
    $matric=$_POST['matric'];
    $email=$_POST['email'];
    $department=$_POST['department'];
    $college=$_POST['college'];
    $dob=$_POST['dob'];
    $password=$_POST['password'];
    $password=md5($password);

    $checkMatric="SELECT * From user where matric='$matric'";
    $result=$conn->query($checkMatric);
    if($result->num_rows>0){
        echo "Matric Number Already Exists!";
    }
    else{
        $insertQuery="INSERT INTO user(name, matric, email, department, college, dob, password)
                        VALUES ('$name', '$matric', '$email' '$department', '$college', '$dob', '$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }

    }

 }

 if(isset($_POST['create'])){
    $matric=$_POST['matric'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM user WHERE matric='$matric' and password='$password";
    $result=$conn->query($sql);
    if($result->num_rows>0){
        session_start();
        $row=$result->fetch_assoc();
        $_SESSION['matric']=$row['matric'];
        header("location: school_dashboard.php");
        exit();
    }
    else{
        echo "Not Found, Inorrect Matric NO or Password!";
    }
 }