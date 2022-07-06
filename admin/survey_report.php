<?php
include '../_dbConnect.php';
  session_start();
  include '../nav.php';
  include 'sidebar.php';
    $q = mysqli_query($conn,"SELECT * FROM answer");
    $total = mysqli_num_rows($q);
    
  $q = @$_GET['q'];

  if($q =='done')
  {
    echo '<script>alert("Survey deleted Successfully.   Total surveys left: '.$total.'");</script>';
  }
  ?>
  

<head>
  <style>
    table {
      position: absolute;
      top: 30%;
      left: 16%;
      display: flex;
      justify-content: center;
      align-items: center;
      border: transparent;
    }

    table th {
      text-align: center;
      color: #fff;
      padding: 1rem .6rem;
      background-color: #95A5A6;
      font-style: italic;
      font-size: 14px;
      text-transform: uppercase;
      box-shadow: 0px 0px 9px 0px rgba(0, 0, 0, 0.1);
      flex-basis: 10%;
      letter-spacing: 0.03em;
      border-radius: 10%;
    }

    table tr td {
      padding: 1rem;
      background: transparent;
      box-shadow: 5px 5px 9px 2px rgba(0, 0, 0, 0.1);
      flex-basis: 10%;
      border: rosybrown;
      border-radius: 10%;;
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
<p id="entries">Total Surveys: <?php echo $total; ?></p>

  <table border="1" cellspacing="0" cellpadding="10">
    <tr>
      <th>Sn.</th>
      <th>Full Name</th>
      <th>Email</th>
      <th>question 1</th>
      <th>question 2</th>
      <th>question 3</th>
      <th>question 4</th>
      <th>question 5</th>
      <th>question 6</th>
      <th>question 7</th>
      <th>question 8</th>
      <th>question 9</th>
      <th>message</th>
      <th>Action</th>
    </tr>
    <?php
    $sql = "SELECT * FROM answer";
    $sn = 1;
    $result = mysqli_query($conn,$sql);
    if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result))
     {
        $id = $row['id'];
    ?>
    <tr>
      <td><?php echo $sn++;?></td>
      <td><?php echo $row['name']?></td>
      <td><?php echo $row['email']?></td>
      <td><?php echo $row['q1']?></td>
      <td><?php echo $row['q2']?></td>
      <td><?php echo $row['q3']?></td>
      <td><?php echo $row['q4']?></td>
      <td><?php echo $row['q5']?></td>
      <td><?php echo $row['q6']?></td>
      <td><?php echo $row['q7']?></td>
      <td><?php echo $row['q8']?></td>
      <td><?php echo $row['q9']?></td>
      <td><?php echo $row['message']?></td>
      <td><?php
          echo '<a href="update.php?q=deletesurvey&id='.$id.'">
          <button class="btn btn-danger">Delete</button>
          </a>';
      ?></td>
    <tr>
      <?php }};?>
  </table>
</body>