<?php session_start();
      include '../db/db_connect.php';
      include '../db/config.php';
      
      if(isset($_POST['des'])) {
        $addRep = mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO `report`(`description`, `category`, `isSolved`) VALUES ('".$_POST['des']."','".$_POST['ptype']."','".$_POST['solved']."')");
      }
?>
<script>
    alert("تم الإرسال بنجاح ") ;
</script>
<meta http-equiv="refresh" content="0;url=techpage.php" />