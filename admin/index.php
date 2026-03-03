<?php

/* 
 *  This is the main page.
 *  This page includes the configuration file, 
 *  the templates, and any content-specific modules.
 */

session_start();
require('../config.php');

// Validate what page to show:
if (isset($_GET['page'])) {
    $p = $_GET['page'];
}else {
    $p = NULL;
}

// Determine what page to display:
switch ($p) {
     case 'login':
        $page = 'login.php';
        $page_title = 'Login Page';
    break;
    case 'loggedin':
        $page = 'loggedin.php';
        $page_title = 'Loggedin Page';
    break;
    case 'logout':
        unset($_SESSION['username']);
        session_destroy();
        header("Location: ../");
        exit;
    break;
    case 'view_cars':
        $page = 'view_cars.php';
        $page_title = 'View Cars Page';
    break;
    case 'details':
        $page = 'details.php';
        $page_title = 'Details Cars Page';
    break;
    case 'insert':
        $page = 'insert.php';
        $page_title = 'Insert Cars Page';
    break;
    case 'update':
        $page = 'update.php';
        $page_title = 'Update Cars Page';
    break;
    case 'delete':
        $page = 'delete.php';
        $page_title = 'Delete Cars Page';
    break;
    
    default: // Default is to include the main page.
        $page = 'login.php';
        $page_title = 'Login Page';
    break;
        
} // End of main switch.

if (!file_exists($page)) {
    $page = 'index.php';
    $page_title = 'Admin Home Page';
}

// Include the header file:
include('./includes/header.php');

// Include the content-specific module:
// $page is determined from the above switch.
include($page);

// Include the footer file:

include('./includes/footer.php');
