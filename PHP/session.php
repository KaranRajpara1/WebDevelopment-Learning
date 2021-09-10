<!-- Session
Global variable which stores value in browser
Multiple pages / tab

Browser close => session will expire

Use of session:
Store small data
User auth
Shopping cart 


-->

<?php
session_start();

// variable
$a = 'Karan';
// Create session variable
$_SESSION['admin'] = "Karan";
$_SESSION['user'] = "Rajpara";

echo $_SESSION['admin'];
echo "<pre>";
print_r($_SESSION);

// Differnece between session variable and  normal variable ?
// Scope of the normal variable will be the same page only
// Scope of the 
?>