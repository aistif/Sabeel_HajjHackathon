<?php session_start();
      include '../db/db_connect.php';
      include '../db/config.php';
      include 'header.php';
      ?>

<!--
Mentor's main page.
-->
        <div>
            <?php
                  $count = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM `smartRef`");
                  $getCount = mysqli_num_rows($count);
            ?>
            <span>العدد الإجمالي للثلاجات: <?= $getCount; ?></span><br/><br/>
            <table class="table table-hover">
            <tbody>
            <?php $getSmartRef = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM `smartRef` ORDER BY `status` ASC"); 
                $cnt = 1;
                while($res1 = mysqli_fetch_array($getSmartRef)) {  ?>
                    <?php $srid = $res1["SRID"];
                        $refStatus = $res1["status"];
                        if($refStatus != "ommitted" && $refStatus != "online") {
                    ?>
                    <div id="ref<?= $res1["SRID"]; ?>">
                        <tr><a onclick="toggleThis('description<?= $cnt ?>')">
                            <td><span class="refreg"><image src="../img/Artboard 1.png" width="30" height="30"/></span></td>
                            <td id="refName"><?= $res1["name"]; ?></td>
                            <td><?php if ($refStatus === "problem") { ?>
                                <img class="refStatus" src="../img/red.png" alt="<?php $refStatus ?>" width="10" height="10"/>
                            <?php } elseif ($refStatus === "offline") { ?>
                                <img class="refStatus" src="../img/grey.png" alt="<?php $refStatus ?>" width="10" height="10"/>
                            <?php } ?><td>
                        </a></tr>
                            <tr id="description<?=$cnt?>" style="background-color: #E5E5E5;">
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
                            <tr id="description<?=$cnt?>" style="background-color: #E5E5E5;">
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
                            <tr id="description<?=$cnt?>" style="background-color: #E5E5E5;">
                                <td><label>الأرفف منتهية الصلاحية -- </label>
                                <span id="refExpiredR<?= $cnt; ?>">
                                    <?= $expR; ?>
                                </span></td>
                                <td><a class="btn" href="#report-box" id="reportbtn">تقرير</a></td>
                            </tr>
                    </div>
                        <?php }
                    $cnt++;
                } ?>
            </tbody>
            </table>
<?php include "../footer.html"; ?>

<?php include '../db/db_connect.php';
      //include '../db/config.php';
      include 'header.php';
      ?>

<!--
tech pages
-->

<div id="report-box" class="report-popup" dir="rtl">
    <a href="#" class="close" onclick="$('.report-popup').fadeOut(300,function(){$('#mask').remove();});"><img src="../img/close.png" class="btn_close" title="Close Window" alt="Close" /></a>
      <form method="post" class="signin" action="report.php">
            <fieldset class="textbox">
            <label class="descProblem">وصفها
                <input id="des" name="des" value="" type="text" autocomplete="on" required="">
            </label>
            <label class="ptype">نوعها
            <select id="ptype" name="ptype" required="">
                    <option selected="selected" disabled="disabled" value="">الرجاء اختيار تصنيف ...</option>
                    <option value="inactive">غير نشطة</option>
                    <option value="empty">فارغة</option>
            </select>
            </label>
            <label class="sol">طريقة الحل:
                <br/><input id="sol1" name="solved" value="fill" type="radio">تمت صيانتها
                <br/><input id="sol2" name="solved" value="replace" type="radio">تم استبدالها
            <br/></label>
            <input type="hidden" name="url" value="index.php" />
            <button class="submit button" type="submit">إرسال</button>        
            </fieldset>
      </form>
    </div>

<?php include "../footer.html"; ?>
