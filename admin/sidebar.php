<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
        }
        .sidebar{
            position: relative;
            max-width:15%;
            width: 15%;
            min-height: 100vh;
            height: auto;
            background-color: rgb(58, 58, 58);
            display: flex;
            padding-top: 10rem;
            /* padding: 2rem; */
        }
        .sidebar ul{
            position: relative;
            width: 100%;
            list-style: none;
        }
        .sidebar ul li{
            position: relative;
            margin-bottom: 4rem;
            width: 100%;
            /* height: 2rem; */
            padding: 2rem;
            cursor: pointer;
            background: rgba(0,0,0,0.7);
            font-size: 20px;
            transition: .4s;
            border-radius: 12px;
        }

        .sidebar ul li:hover{
            color: #11101d;
            background: #fff;
            padding-left: 50px;
            filter: brightness(80%);
        }
        .sidebar ul li a{
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            font-size: 1.4rem;
            padding-left: 2rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <ul>
            <li><a href="dash.php">Home</a></li>
            <li><a href="users.php">Users</a></li>
            <li><a href="survey_report.php">Survey report</a></li>
        </ul>
    </div>
</body>
</html>