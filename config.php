<?php
    session_start();
    require_once "GoogleAPI/vendor/autoload.php";

    $gClient = new Google_Client();
    $gClient->setClientId("126519170207-5e17mm4o5pmgeqjnfnvq5enclafedf3t.apps.googleusercontent.com");
    $gClient->setClientSecret("126519170207-5e17mm4o5pmgeqjnfnvq5enclafedf3t.apps.googleusercontent.com");
    $gClient->setApplicationName("CPI Login");
    $gClient->setRedirectUri("http://localhost/lucasweb/GoogleLogin/g-callback.php");
    $gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");



?>