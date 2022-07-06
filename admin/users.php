<?php
use LDAP\Result;
include '../_dbConnect.php';
  session_start();
  include '../nav.php';
  include 'sidebar.php';
  $q = mysqli_query($conn,"SELECT * FROM users");
  $total = mysqli_num_rows($q);
  $q = @$_GET['q'];

  if($q =='done1')
  {
    echo '<script>alert("User deleted Successfully.   Total users left: '.$total.'");</script>';
  }
  ?>

<head>
  <style>
    
    table {
      position: absolute;
      top: 30%;
      left: 30%;
      display: flex;
      justify-content: center;
      align-items: center;
      border: transparent;
    }

    table th {
      text-align: center;
      color: #fff;
      padding: 1rem .6rem;
      font-style: italic;
      font-weight: 300;
      background-color: #95A5A6;
      font-size: 14px;
      text-transform: uppercase;
      letter-spacing: 0.03em;
      border: rosybrown;
      border-radius: 10%;
    }

    table tr td {
      padding: 1rem;
      background: transparent;
      box-shadow: 5px 5px 9px 2px rgba(0, 0, 0, 0.1);
      flex-basis: 10%;
      border-radius: 10%;
      
    }
    #entries{
      position: absolute;
      top:22%;
      left:17%;
      font-size: 2.2rem;
      color: #ffffff;
    }

  </style>
</head>

<body style="background-image: url('clouds.jpg');">
<p id="entries">Total User: <?php echo $total; ?></p>
  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>Sn.</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>Created At</th>
      <th>Action</th>
    </tr>
    <?php
    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn,$sql);
    $sn = 1;
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
    ?>
    <tr>
      <td><?php echo $sn++;?></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['date']?></td>
      <td><?php
          echo '<a href="update.php?q=deleteuser&id='.$id.'">
          <button class="btn btn-danger">Delete</button>
          </a>';
      ?></td>
    <tr>
      <?php }};?>
  </table>
</body>