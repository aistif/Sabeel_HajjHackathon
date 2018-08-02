<?php session_start();
    if(!isset($_SESSION['login'])) {  
            header("location:../index.php");
            exit();
    } elseif((time()-$_SESSION['timestamp']) > 900) {
            unset($_SESSION['login'], $_SESSION['timestamp']);
            echo '<script type="text/javascript">alert("لقد أمضيت ٣٠ دقيقة بدون نشاط، نرجوا تسجيل الدخول مرة أخرى!"); window.location.href="index.php";</script>';
            exit;
    } else {
            $_SESSION['timestamp'] = time();
    }
?>