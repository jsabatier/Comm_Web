<?php

// Connect to the database. Returns a PDO object
function getDb() {
    // Local deployment
    $server = "localhost";
    $username = "leonore";
    $password = "paulineetjuliette";
    $db = "histoire_heros"; 
    
        
    return new PDO("mysql:host=$server;dbname=$db;charset=utf8", "$username", "$password",
    array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
function isUserAdmin()
{
    $log =$_SESSION['login'];
    
    
    $req = getDb()->prepare ('select Admin from user_et_admin where Login_User=?');
        $req->execute(array($log));
        $rq = $req->fetch();
      
    return $rq['Admin']; // here is what you really need
}


// Check if a user is connected
function isUserConnected() {
    return isset($_SESSION['login']);
}

// Redirect to a URL
function redirect($url) {
    header("Location: $url");
}

// Escape a value to prevent XSS attacks
function escape($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8', false);
}