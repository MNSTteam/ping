<?php
header('Access-Control-Allow-Origin: https://mnst.club');
header('Access-Control-Allow-Methods: POST, GET');
header('Access-Control-Allow-Headers: NCZ');
header('Access-Control-Max-Age: 1728000');
header('Access-Control-Allow-Credentials: true');
header("X-Accel-Expires: 0");


	if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
    
    $ext = explode('.',$_FILES['file']['name']);
    $fext = strtolower($ext[sizeof($ext)-1]);
    $_POST['tx']=preg_replace("/[^0-9a-zA-Z]+/ism","",$_POST['tx']);
    
        move_uploaded_file($_FILES['file']['tmp_name'], 'i/' .$_POST['tx'].'.'.$fext);
        
        print_r($_FILES);
        print_r($_POST);
        echo 'i/' .$_POST['tx'].'.'.$fext;
    }
?>