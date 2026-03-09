<?php

require('../config.php');
session_start();

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

if ($page === 'logout.php') {
    include($page);
    exit;
}

include('./includes/header.php');
include($page);
include('./includes/footer.php');

