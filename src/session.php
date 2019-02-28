<?php
session_save_path(__DIR__.'/../session');
session_set_cookie_params(60000,'/', null,false);
session_start();

unset($user);
$user = $_SESSION['user'] ?? null; 

if (!$user)
{
    
    header('location: /login');
    
 
}


?>