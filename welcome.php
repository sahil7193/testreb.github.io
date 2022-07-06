<?php
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) {
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="welcome.css">
</head>
<body>
    <section>
        <?php include "nav.php";?>
        <?php include "studentSurvey.php"?>
    </section>
    <script>
        const profile = document.querySelector(".profile");
        const info = document.querySelector(".info");
        profile.addEventListener("click", () => {
            if(info.classList.contains("active")){
                info.classList.remove("active");
            }else{
                info.classList.add("active");
            }
        })
    </script>
</body>
</html>