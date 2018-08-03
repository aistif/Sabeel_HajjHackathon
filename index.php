<?php session_start();
      include 'db/db_connect.php';
      include "header.php";
            if(!empty($_POST["username"])) {
                $username = trim($_POST["username"]) ;
                $password = trim($_POST["password"]) ;
                $password = md5($password) ;

                $results = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM `users` WHERE `username`='".$username."' AND `pwd`='".$password."'");
                $row = mysqli_fetch_array($results);
                $DATABASEUSERNAME = $row['username'];
                $DATABASEPASSWORD = $row['pwd'];
                $UserType = $row['type'];
                
                if(!empty($UserType)) {
                    $_SESSION['username'] = $DATABASEUSERNAME;
                    $_SESSION['timestamp'] = time();

                    if($UserType === "mentor") {
                        header("Location: mentor_pages/mentorPage.php");
                    } elseif($UserType === "technician") {
                        header("Location: tech_pages/techPage.php");
                    } elseif($UserType === "admin") {
                        header("Location: a_pages/adminPage.php");
                    } else {
                        //not of any type...
                    }
                        
                } else { 
                        $_SESSION['username'] = "";
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
        <div class="login-cont">
            <img src="img/Sabeel-Logo-White.png" class="logo">
            <span class="div-login"></span>
            <form name="login" action="index.php" method="POST" onSubmit="return login_validator(this)">
                <label>اسم المستخدم: </label>
                <input id="username" name="username" type="text"/>
                <br/>
                <label>كلمة المرور:</label>
                <input id="password" name="password" type="password"/>
                <br/>
                <input type="submit" class="" name="commit" value="دخول" class="btn"/>
            </form>
        </div>
            <?php include("footer.html");
            } 
        ?>