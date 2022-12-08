<?php 
    session_start();
    if(session_destroy()){
        header("Location: http://localhost/web221/User/sign_in");
    }
?>