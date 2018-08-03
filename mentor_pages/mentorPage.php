<?php session_start();
      include '../db/db_connect.php';
      include '../db/config.php';
      include 'header.php';
      ?>

<!--
Mentor's main page.
-->
        <div>
            <form id="addNewRef" name="addNewRef" action="addRef.php" method="POST">
                <input id="newSmartRef" type="submit" value="إضافة ثلاجات"/>
            </form>
            <?php
                  $count = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM `smartRef`");
                  $getCount = mysqli_num_rows($count);
            ?>
            <span>العدد الإجمالي للثلاجات: <?= $getCount; ?></span><br/>
            <table class="table table-hover">
            <tbody>
            <?php $getSmartRef = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM `smartRef` ORDER BY `status` DESC"); 
                $cnt = 1;
                while($res1 = mysqli_fetch_array($getSmartRef)) {  ?>
                    <?php $refStatus = $res1["status"];
                        if($refStatus != "ommitted") {
                    ?>
                        <tr id="ref<?= $res1['SRID'] ?>" onclick="toggleThis('description1<?= $cnt ?>','description2<?= $cnt ?>','description3<?= $cnt ?>')">
                            <td><span class="refreg"><image src="../img/Artboard 1.png" width="30" height="30"/></span></td>
                            <td id="refName"><?= $res1["name"]; ?></td>
                            <td><?php if($refStatus === "online") { ?>
                                <img class="refStatus" src="../img/green.png" alt="<?php $refStatus ?>" width="10" height="10"/>
                            <?php } elseif ($refStatus === "problem") { ?>
                                <img class="refStatus" src="../img/red.png" alt="<?php $refStatus ?>" width="10" height="10"/>
                            <?php } elseif ($refStatus === "offline") { ?>
                                <img class="refStatus" src="../img/grey.png" alt="<?php $refStatus ?>" width="10" height="10"/>
                            <?php } ?><td>
                            </tr>
                            <tr id="description1<?=$cnt?>" style="display: none;">
                                <td><label>IP -- </label>
                                    <span id="refIP<?=$cnt?>"><?= $res1["IP"]; ?></span></td>

                                <td><label>درجة الحرارة --</label>
                                    <span id="refTemp<?=$cnt?>"><?= $res1["temp"]; ?></span></td>

                                <td><label>ممتلئة؟ -- </label>
                                <?php if($res1["isFull"] == 'y') { ?>
                                    <span>نعم</span>
                                <?php } else { ?>
                                    <span>نعم</span>
                                <?php } ?></td>
                            </tr>
                            <tr id="description2<?=$cnt?>" style="display: none;">
                                <td><label>الموقع -- </label>
                                    <span id="refLoc<?= $cnt; ?>"><?= $res1["loc"]; ?></span></td>

                                <td><label>النشاط -- </label>
                                    <span id="refActive<?= $cnt; ?>"><?= $res1["lastActive"]; ?></span></td>

                                <?php $relatedRows = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM `refRows` WHERE `SRID` =".$res1['SRID']);
                                $cntR = 0;
                                $expR = 0;
                                while ($refRow = mysqli_fetch_array($relatedRows)) {
                                    if($refRow["isFull"]=='n'){
                                        $cntR++;
                                    }

                                    $numDays = abs($refRow["timeAdded"] - time())/60/60/24;
                                    if($numDays==6){
                                        $expR++;
                                    }
                                } ?>
                                <td><label>عدد الأرفف الفارغة -- </label>
                                <span id="refِEmptyR<?= $cnt; ?>">
                                    <?= $cntR; ?>
                                </span></td>
                            </tr>
                            <tr id="description3<?=$cnt?>" style="display: none;">
                                <td><label>الأرفف منتهية الصلاحية -- </label>
                                <span id="refExpiredR<?= $cnt; ?>">
                                    <?= $expR; ?>
                                </span></td>
                            </tr>
                        <?php }
                    $cnt++;
                } ?>
            </tbody>
            </table>
<?php include "../footer.html"; ?>
