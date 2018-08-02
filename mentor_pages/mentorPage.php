<?php include '../db/db_connect.php';
      //include '../db/config.php';
      include 'header.php';
      $cnt;
      ?>

<!--
Mentor's main page.
-->
        <div>
            <form id="addNewRef" name="addNewRef" action="addRef.php" method="POST">
                <input id="newSmartRef" type="submit" value="إضافة ثلاجات"/>
            </form>
            <span>العدد الإجمالي للثلاجات: <?= $cnt; ?></span><br/>
            <?php $getSmartRef = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM `smartRef` order by `status` ASC"); 
                $cnt = 1;
                while($res1 = mysqli_fetch_array($getSmartRef)) {  ?>
                    <?php $refStatus = $res1["status"];
                        if($refStatus != "ommitted") {
                    ?>
                    <div id="ref<?php echo $res1["SRID"]; ?>">
                        <a onclick="toggleThis(description<?= $cnt ?>);">
                            <span class="numbering"><?= $cnt; ?></span>
                            <p id="refName"><?php echo $res1["name"]; ?></p>
                            <?php if($refStatus == "online") { ?>
                                <img class="refStatus" url="green.png" alt="<?php $refStatus ?>"/>
                                <script>document.getElementById("maintReqBtn<?= $cnt ?>").disabled = true;</script>
                            <?php } elseif ($refStatus == "problem") { ?>
                                <img class="refStatus" url="red.png" alt="<?php $refStatus ?>"/>
                            <?php } elseif ($refStatus == "offline") { ?>
                                <img class="refStatus" url="gery.png" alt="<?php $refStatus ?>"/>
                            <?php } ?>
                            <div id="description<?= $cnt; ?>" style="display: none;">
                                <label>IP -- </label>
                                <span id="refIP<?= $cnt; ?>"><?= $res1["IP"]; ?></span>
                                <br/>
                                
                                <label>درجة الحرارة --</label>
                                <span id="refTemp<?= $cnt; ?>"><?= $res1["temp"]; ?></span>
                                <br/>
                                
                                <label>ممتلئة؟ -- </label>
                                <?php if($res1["isFull"] == 'y') { ?>
                                    <span>نعم</span>
                                <?php } else { ?>
                                    <span>نعم</span>
                                <?php } ?>
                                <br/>
                                
                                <label>الموقع -- </label>
                                <span id="refLoc<?= $cnt; ?>"><?= $res1["loc"]; ?></span>
                                <br/>
                                
                                <label>النشاط -- </label>
                                <span id="refActive<?= $cnt; ?>"><?= $res1["lastActive"]; ?></span>
                                <br/>
                                <?php $relatedRows = mysql_query("SELECT * FROM `refRows` WHERE `SRID` =".$res1["SRID"]);
                                $cntR = 0;
                                $expR = 0;
                                while ($refRow = mysqli_fetch_array($relatedRows)) {
                                    if($refRow["isFull"]=='n'){
                                        $cntR++;
                                    }
                                    
                                    $dt = new DateTime($refRow["timeAdded"]);
                                    if($dt->diff(time())>=6){
                                        $expR++;
                                    }
                                } ?>
                                <label>عدد الأرفف الفارغة -- </label>
                                <span id="refِEmptyR<?= $cnt; ?>">
                                    <?= $cntR; ?>
                                </span>
                                <br/>
                                
                                <label>الأرفف منتهية الصلاحية -- </label>
                                <span id="refExpiredR<?= $cnt; ?>">
                                    <?= $expR; ?>
                                </span>
                                <br/>
                                <form id="maintenanceReq" name="maintenanceReq" method="POST" action="maintRequest.php">
                                    <input id="maintReqBtn<?= $cnt ?>" type="submit" value="طلب صيانة"/> 
                                </form>
                            </div>
                        </a>
                    </div>
                        <?php } else {
                            continue;
                        }
                    $cnt++;
                } ?>
<?php include "footer.html"; ?>
