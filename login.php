<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <div class="blueBg">
            <div class="box signin">
                <h2>Already have an account ?</h2>
                <button class="signinBtn">Sign in</button>
            </div>
            <div class="box signup">
                <h2>Don't have an account ?</h2>
                <button class="signupBtn">Sign up</button>
            </div>
        </div>
        <div class="formBx">
            <div class="form signinForm">
                <form action="signin.php" method="post">
                    <h3>Sign In</h3>
                    <input type="email" name="emailIn" placeholder="Email" required>

                    <input type="password" name="pwdIn" placeholder="Password" required>
                    <input type="submit" name="login" value="Login">
                    <a href="forget.php" target="_blank" class="forgot">Forgot Password ?</a>
                    <a href="./admin/index.php" style="margin-top: 1rem;" class="admin">Admin login</a>
                </form>
            </div>

                <div class="form signupForm">
                    <form action="signup.php" method="post">
                        <h3>Sign up</h3>
                        <input type="text" name="name" placeholder="Name" required>
                        <input type="text" name="emailUp" placeholder="Email" required>
                        <input type="password" name="pwdUp" placeholder="Password" required>
                        <input type="password" name="rePwd" placeholder="Confirm Password" required>
                        <input type="submit" name="register" value="Register">    
                    </form>
                </div>
        </div>
    </div>
    <script>
        const signinBtn =document.querySelector('.signinBtn');
        const signupBtn =document.querySelector('.signupBtn');
        const formBx =document.querySelector('.formBx');
        const body = document.querySelector('body')

        signupBtn.onclick = function(){
            formBx.classList.add('active')
            body.classList.add('active')
        }

        signinBtn.onclick = function(){
            formBx.classList.remove('active')
            body.classList.remove('active')
        }
    </script>
</body>
</html>