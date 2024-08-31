<?php

 require '../../includes/init.php';

//  print_r($_POST);
//   for check the all the data are gone or note....

if(isset($_POST["register"])){
 $name=$_POST['name'];
 $mobileno=$_POST['mobileno'];
 $email=$_POST['email'];
 $address=$_POST['address'];
 $username=$_POST['username'];
 $password=$_POST['password'];
$confirmpassword=$_POST['confirmpassword'];

$errors = array();//ARRAY declaration...

if(empty($name) OR empty($mobileno) OR empty($email) OR empty($address) OR empty($username) OR empty($password) ){
 array_push($errors,"All Fields are required....");
}

// if(filter_var($email,FILTER_VALIDATE_EMAIL)){
//     array_push($errors,"Email is Not Valid...!!");
// }

if(strlen($password) < 4){
    array_push($errors,"Password Must be at least 4 character...");
}

if($password !== $confirmpassword){
    array_push($errors,"Password does not match....!!!");
}

if(count($errors) > 0){
        echo "<script> <script>";
}else{

    $query="INSERT INTO register(name,mobileno,email,address,username,password) VALUES('$name','$mobileno','$email','$address','$username','$password')";
            $result= mysqli_query($connection,$query);
            
            if($result){
                header("location:../../pages/login/login");
            }else{
                die(mysqli_error($connection));
            }
}

}

//  $name=$_POST['name'];
//  $mobileno=$_POST['mobileno'];
//  $email=$_POST['email'];
//  $address=$_POST['address'];
//  $username=$_POST['username'];
//  $password=$_POST['password'];
// $confirmpassword=$_POST['confirmpassword'];

// if($password){

//     if($password == $confirmpassword){
        
//         $query="INSERT INTO register(name,mobileno,email,address,username,password) VALUES('$name','$mobileno','$email','$address','$username','$password')";
        
//         $result= mysqli_query($connection,$query);
        
//         if($result){
//             header("location:../../pages/login/login");
//         }else{
//             die(mysqli_error($connection));
//         }
//     }else{
//         header("location:../../pages/login/register");
//     }
// }else{
//     header("location:../../pages/login/register");
// }


?>