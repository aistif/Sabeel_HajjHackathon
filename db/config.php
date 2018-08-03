<?php 
    if(empty($_SESSION['username'])) {  
            header("location:../index.php");
            exit();
    } elseif((time()-$_SESSION['timestamp']) > 900) {
            unset($_SESSION['username'], $_SESSION['timestamp']);
            echo '<script type="text/javascript">alert("لقد أمضيت ٣٠ دقيقة بدون نشاط، نرجوا تسجيل الدخول مرة أخرى!"); window.location.href="../index.php";</script>';
            exit;
    } else {
            $_SESSION['timestamp'] = time();
    }
?>