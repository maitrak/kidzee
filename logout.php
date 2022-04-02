<?php
    session_start();
    unset($_SESSION['Username']);
    unset($_SESSION['password']);
	
    echo "<script>window.alert('Loged Out');</script>";
    echo "<script>window.location.href='index.php'</script>";
?>