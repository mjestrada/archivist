<?php

include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName=$_POST['fName'];
    $lastName=$_POST['lName'];
    $studentID=$_POST['stdID'];
    $password=$_POST['password'];
    $password=md5($password);

    $checkStudentID="SELECT * FROM user where stdID='$studentID'";
    $result=$conn->query($checkStudentID);
    if($result->num_rows>0){
        echo "Student ID Already Exists!";
    }
    else{
        $insertQuery="INSERT INTO user(firstname, lastname, studentID, password)
                        VALUES ('$firstName', '$lastName', '$studentID', '$password')";
            if($conn->query($insertQuery)==TRUE){
                header("location: index.php");
            }
            else{
                echo "Error:".$conn->error;
            }
    }

}

if(isset($_POST['signIn'])){
    $studentID=$_POST['stdID'];
    $password=$_POST['password'];
    $password=md5($password);

    $sql="SELECT * FROM user WHERE stdID='$studentID' and password='$password'";
    $result=$conn->query($sql);
    if($result->num_rows>0){
     session_start();
     $row=$result->fetch_assoc();
     $_SESSION['stdID']=$row['stdID'];
     header("location: homepage.php");
     exit();
    }
    else{
        echo "Not Found, Incorrect Student ID or Password";
    }
}
?>