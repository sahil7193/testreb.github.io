<?php 
    include '_dbConnect.php';
    $exists = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['get'])){
            $email = $_POST['email'];
            $sql = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn,$sql);
            $existsUser = mysqli_num_rows($result);
            if($existsUser == 1){
                $exists = true;
                if($exists){
                    $row = mysqli_fetch_assoc($result);
                    echo "Your password is---- ".$row['password']."<br><p>Click here to <a href='login.php'>login</a></p>";
                }
            }
        }
    }
?>


<?php  
if(!$exists){
    echo "
        <form method='post'>
            <label for='name'>Enter Email</label>
            <input type='email' name='email' required>
            <button type='submit' name='get'>get password</button>
        </form>
   ";
}
   

?>

<style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-weight: bold;
            background-color: #03a9f4;
        }
        body form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 1rem;
        }
        body input{
            padding-left: .3rem;
            font-size: 1rem;
            height: 1.8rem;
        }
        button{
            padding: .3rem .7rem;
            cursor: pointer;

        }

</style>