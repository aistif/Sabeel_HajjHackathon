<?php include '../db/db_connect.php';
      include '../db/config.php';
      
      $newNum = rand (1, 5);
      for ($i = 1; $i <= $newNum; $i++) {
          $addNewRef = mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO `smartRef`(`name`, `IP`, `temp`, `loc`) VALUES ('SR_N".random_int(244, 999)."','192.168.".random_int(1, 10).".".random_int(100, 250)."','".random_int(0, 5)."','--the location of ref--')");
          $newRefID = mysqli_insert_id();
          $letterIndex = range('A','D');
          foreach($letterIndex as $lIndex){
            for($j = 1; $j <= 4; $j++) {
                $addRefRows = mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO `refRows`(`rowID`, `SRID`) VALUES ('".$lIndex.$j."','".$newRefID."')");
            }
          }
      }
?>
<script>
    alert("تمت الإضافة بنجاح") ;
</script>
<meta http-equiv="refresh" content="0;url=mentorPage.php" />