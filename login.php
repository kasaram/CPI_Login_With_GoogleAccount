<?php
    require_once "config.php";
    $loginURL = "";
    $loginURL = $gClient->createAuthUrl();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <title>Login with Google</title>
</head>
<body>
    <div class="container" style="margin-top: 200px;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-offset-3" align="center">
                <img src="img/login.svg" alt="logo">

                <form action="">
                    <input placeholder="email" name="email" calss="form-control">
                    <br/>
                    <input type="password" placeholder="password" name="passwrod" calss="form-control">
                    <br/>
                    <input type="submit" value="Log In" class="btn btn-primary">
                    <input type="button" onclick="window.location ='<?php echo $loginURL; ?>'; " value="Log In With Google" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
</body>
</html>