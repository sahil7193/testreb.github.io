
<?php 
    include '_dbConnect.php';
    $success = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['register'])){
            $name = $_POST['name'];
            $email = $_POST['emailUp'];
            $pwd = $_POST['pwdUp'];
            $rePwd = $_POST['rePwd'];
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn,$query);
            $existRows =  mysqli_num_rows($result);
            if($existRows > 0){
                echo "<p style='font-size:5em;color:black;text-align: center;'>The email already exists...!</p>";
                echo 'Click here to <a href="login.php">login</a>';
                echo '<body style="background-color:#f43648">';
            }else{
                if($pwd == $rePwd){
                    $sql = "INSERT INTO users (name,email,password,date) VALUES ('$name','$email','$pwd', CURRENT_TIMESTAMP() )";
                    $result = mysqli_query($conn,$sql);
                    if($result){
                        $success =true;
                    }
                }else{
                    echo "<p style='font-size:5em;color:black;text-align: center;'>Password don't match...!</p>";  
                    echo 'Click here to <a href="login.php">login</a>';  
                    echo '<body style="background-color:#f43648">';    
                }
            }
        }
    }
?>

<?php 
    if($success){
        echo '<section class ="container"><h2>Account has been created </h2> <br><br> <p>Click here to <a href="login.php">login</a></p></section>';
        echo '<body style="background-color:#f43648">';
            
    }
?>


<?php 
    echo '<style>
             body{margin:0;padding:0;box-sizing:border-box;};
            .container{width: 100%; height:100vh; display:flex;justify-content:center;align-items:center;background:#999;};
         </style>';
?>