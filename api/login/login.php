<?php

require '../../includes/init.php';


if(isset($_POST["login"])){
    
    
    // print_r($_POST);
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    
    $query="SELECT id,username,password FROM register WHERE username='$username' AND password='$password'";

    $result=mysqli_query($conn,$query);
    $user = mysqli_fetch_array($result,MYSQLI_ASSOC);
    // print_r($user);
    
    if($user){
            header("location:../../");
    }else{
        header("location:../../pages/login/login");
        echo "<div class='alert alert-danger'>data is not retrive</div>";
    }
}

?>