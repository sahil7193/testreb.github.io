<?php
        include '_dbConnect.php';
        session_start();
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            if(isset($_POST['submit'])){
                $name = $_POST['fName'] . " " . $_POST['lName'];
                $rollno = $_POST['rollno'];
                $email =$_SESSION['myEmail'];
                $class = $_POST['class'] . " " . $_POST['section'];
                $rollno = $_POST['rollno'];
                $dob = $_POST['dob'];
                $address = $_POST['address'];
                $query = "INSERT INTO basicinfo(name,email,class,rollno,dob,address) VALUES ('$name',  '$email', '$class', $rollno, '$dob', '$address')";
                $result1 = mysqli_query($conn,$query);
                $name_1 = $_POST['1'];
                $name_2 = $_POST['2'];
                $name_3 = $_POST['3'];
                $name_4 = $_POST['4'];
                $name_5 = $_POST['5'];
                $name_6 = $_POST['6'];
                $name_7 = $_POST['7'];
                $name_8 = $_POST['8'];
                $name_9 = $_POST['9'];
                $message = $_POST['message'];
    
                $q2 = "INSERT INTO answer (name,email,q1,q2,q3,q4,q5,q6,q7,q8,q9,message) VALUES('$name','$email','$name_1','$name_2','$name_3','$name_4','$name_5','$name_6','$name_7','$name_8','$name_9','$message')";  
                $result2 = mysqli_query($conn,$q2);  

                if($result1 && $result2){
                    
                   echo "<p style='font-size:3.5em;color:black;text-align: center;line-height: 400px;
                   position: absolute;'>Thanks for helping us.Please <a href='welcome.php'>click</a> here back to welcome page.!</p>";  
                    echo '<body style="background-color:#f43648">'; 
                   // echo '<script>alert("Survey Submitted Successfully.");</script>';
                }
            }
        }
?>