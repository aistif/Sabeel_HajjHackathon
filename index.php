<?php session_start();
      include "db/db_connect.php";
      include "header.php";
            if(isset($_POST['username'])) {
                $username = trim($_POST["username"]) ;
                $password = trim($_POST["password"]) ;
                $password = md5($password) ;

                $sql1 = @mysqli_query($GLOBALS["___mysqli_ston"], "SELECT `username`,`type`, `pwd` FROM `users` WHERE `username` ='".$username."' AND `pwd`='".$password."'") or die(mysql_error());
                $rows = @mysqli_num_rows($sql1);
                $DATABASEUSERNAME = $rows[0];
                $DATABASEPASSWORD = $rows[2];
                $UserType = $rows[1];
                
                if($rows==1) {
                    $_SESSION['usename'] = $DATABASEUSERNAME;
                    $_SESSION['timestamp'] = time();
                    if($UserType == 'mentor') {
                        header("Location: mentor_pages/mentorPage.php");
                    } elseif($UserType == "technician") {
                        header("Location: tech_pages/techPage.php");
                    } elseif($UserType == "admin") {
                        header("Location: a_pages/adminPage.php");
                    } else {
                        header("Location: mentor_pages/mentorPage.php");
                        //not of any type...
                    }
                        
                } else { 
                        unset( $_SESSION['usename']);
                        ?>
                        <script type="text/javascript">
                                alert("بيانات الدخول المدخلة غير صحيحة");
                                header("Location: index.php");
                        </script>
                <?php }
            } else {
        ?>             
<!--
Login Page
-->
        <div>
            <form name="login" action="index.php" enctype="application/x-www-form-urlencoded" method="POST"  onSubmit="return login_validator(this)">
                <label>اسم المستخدم: </label>
                <input id="username" name="username" type="text"/>
                
                <label>كلمة المرور:</label>
                <input id="password" name="password" type="password"/>
                
                <input type="submit" class="" name="commit" value="دخول"/>
            </form>
            <?php include("footer.html");
            } 
        ?>