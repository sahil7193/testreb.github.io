<!-- Delete survey -->

<?php 

    include '../_dbConnect.php';
    $q = @$_GET['q'];
    if($q == 'deletesurvey'){
        $sid = @$_GET['id'];
        $sql1 = mysqli_query($conn,"delete from answer where id = '$sid'");

    if($sql1){
        header('location:survey_report.php?q=done');
    }
    }

    if($q == 'deleteuser'){
        $id = @$_GET['id'];
        $sql = mysqli_query($conn,"delete from users where id = '$id'");

    if($sql){
        header('location:users.php?q=done1');
    }
}
    
?>