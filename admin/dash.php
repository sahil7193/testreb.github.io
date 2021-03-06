<?php
  session_start();
  if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] == false) {
    header('location: index.php');
}
  include '../nav.php';
  include 'sidebar.php';
  ?>

  <?php 
    echo '
    
    <head>
    <title>Admin Portal</title>
    <style>
        
nav{
    width: 100%;
    height: 7rem;
    padding: 0 5rem;
    background-color: #03a9f4;
    box-shadow: 10px 0 20px rgba(0,0,0,0.42);
    display: flex;
    align-items: center;
    justify-content: space-between;
    z-index: 2;

}

nav .header h2{
    color: #fff;
}

nav .profile{
    position: relative;
    width: 3rem;
    height: 3rem;
    background-color: #fff;
    border-radius: 50%;
    box-shadow: 0 0 20px rgba(255,255,255,0.4);
    /* cursor: pointer; */
}

nav .profile::before{
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    width: 50%;
    height: 50%;
    transform: translate(-50%,-50%);
    border-radius: 50%;
    background-image: url("../profile.png");
    background-repeat: no-repeat;
    background-size: cover;

}

.info{
    position: absolute;
    top: 4.2rem;
    background-color: #f43648;
    padding: 1rem;
    color: #fff;
    width: auto;
    height: auto;
    visibility: hidden;
    transform-origin: top center;
    transform: scaleY(0);
    opacity: 0;
    right: -3rem;
    box-shadow: 0 0 20px #f436498b;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    gap: .5rem;
    z-index: 999;
    transition:all  0.1s ease-in-out;
}
.info.active{
    visibility: visible;
    transform: scaleY(1);
    opacity: 1;
}
.info span:nth-child(1){
    font-weight: bold;
    letter-spacing: 1px;
}

.info button{
    padding: .3rem .7rem;
    border: none;
    cursor: pointer;
    background-color: #fff;
    border-radius: .16rem;
}

#logout{
    cursor: pointer;
}


.content{
    position: relative;
    width: 100%;
    height: calc(100vh - 7rem);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1;     
}

table{
    font-size: 2rem;
}
.header{
    margin: 5rem 0;
}
#heading{
    position: absolute;
    top: 10%;
    left: 20%;
}
    </style></head>';
  ?>
  <body style="background-image: url('clouds.jpg');">
  </body>


<h2 id="heading">Welcome to admin portal</h2>