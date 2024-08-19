<?php 

include 'database.php';

if(isset($_POST['staff_signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $staff_id=$_POST['staff_id'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);

     $checkStaff_id="SELECT * From staffs where staff_id='$staff_id'";
     $result=$conn->query($checkStaff_id);
     if($result->num_rows>0){
        echo "Staff_id Already Exists !";
     }
     else{
        $insertQuery="INSERT INTO staffs(fName,lName,staff_id,email,password)
                       VALUES ('$firstName','$lastName','$staff_id','$email','$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: test_staff_index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
     }
   

}

if(isset($_POST['staff_signIn'])){
   $staff_id=$_POST['staff_id'];
   $password=$_POST['password'];
   $password=md5($password) ;
   
   $sql="SELECT * FROM staffs WHERE staff_id='$staff_id' and password='$password'";
   $result=$conn->query($sql);
   if($result->num_rows>0){
    session_start();
    $row=$result->fetch_assoc();
    $_SESSION['staff_id']=$row['staff_id'];
    header("Location: school_dashboard.php");
    exit();
   }
   else{
    echo "Not Found, Incorrect Staff_id or Password";
   }

}
?>