<?php
session_start();
if(isset($_SESSION['counter']))
{
    
    //$_SESSION['counter'] = $_SESSION['counter']+1; 
    $_SESSION['counter']++; 
    echo $_SESSION['counter'];
}
else
{
    $_SESSION['counter'] = 0;
    echo $_SESSION['counter'];
    
}

?>