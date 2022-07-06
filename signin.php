<?php 
    include '_dbConnect.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['login'])){
            $email = $_POST['emailIn'];
            $pwd = $_POST['pwdIn'];
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn,$sql);
            $existsUser = mysqli_num_rows($result);
            if($existsUser == 1){
                    while($row = mysqli_fetch_assoc($result)){
                        if($pwd == $row['password']){
                            session_start();
                            $_SESSION['loggedIn'] = true;
                            $_SESSION['username'] = $row['name'];
                            $_SESSION['myEmail'] = $row['email'];
                            header('location: welcome.php');
                        }else{
                            echo 'Password is wrong..!';
                        }
                    }
                        
              
            }else{
                echo 'Account not found...!';
            }
        }
    }

    // if(session_destroy() && session_unset()){
    //     header('location: welcome.php');
    // }
?>