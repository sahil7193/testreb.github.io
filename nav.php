<?php 
    include '_dbConnect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css"
     integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="welcome.css">
    <link rel="stylesheet" href="navbar.css">
</head>
<body>
<nav>
            <div class="header">
                <h2><?php echo "Welcome ". $_SESSION['username']?></h2>
            </div>
            <div class="profile">
                    <div class="info">
                        <span><?php echo $_SESSION['username'] ?></span>
                        <span><?php echo $_SESSION['myEmail'] ?></span>
                        <a href="logout.php" id="logout"><button type="button" name="logout">Logout</button></a>
                    </div>
            </div>
</nav>

<script>
        const profile = document.querySelector('.profile');
        const info = document.querySelector('.info');
        profile.addEventListener('click', () => {
            if(info.classList.contains('active')){
                info.classList.remove('active');
            }else{
                info.classList.add('active');
            }
        })

</script>
</body>
