<?php session_start();
      include '../db/db_connect.php';
      include '../db/config.php';
      
      $newNum = rand (1, 5);
      $nameR = 'SR_N'.rand(244, 999);
      $ip = "192.168.".rand(1, 10).".".rand(100, 250);
      $letterIndex = range('A','D');
      
      for ($i = 1; $i <= $newNum; $i++) {
          $addNewRef = mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO `smartRef`(`name`, `IP`, `temp`, `loc`) VALUES ('".$nameR."','".$ip."','".rand(0, 5)."','--the location of ref--')");
          $getID = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT `SRID` FROM `smartRef` WHERE `name`='".$nameR."' AND `IP`='".$ip."'");
          $sfid = mysqli_fetch_array($getID);
          foreach($letterIndex as $lIndex){
            for($j = 1; $j <= 4; $j++) {
                $addRefRows = mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO `refRows`(`rowID`, `SRID`) VALUES ('".$lIndex.$j."','".$sfid['SRID']."')");
            }
          }
      }
?>
<script>
    alert("تمت الإضافة بنجاح ") ;
</script>
<meta http-equiv="refresh" content="0;url=mentorPage.php" />