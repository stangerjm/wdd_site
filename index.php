<?php

require 'wdd_site_model/wdd_site_db_conn.php';

$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);

if($action === NULL){
    $action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING);
    if($action === NULL){
        $action = 'goHome';
    }
}


switch($action){
    case 'goHome':
        include 'wdd_site_view/web_pages/wdd_site_homepage.php';
        break;
    case 'portfolio':
        include 'wdd_site_view/web_pages/wdd_site_portfolio.php';
        break;
    case 'login':
        include 'wdd_site_view/web_pages/wdd_site_login.php';
        break;
    case 'profile':
        include 'wdd_site_view/web_pages/wdd_site_profile.php';
        break;
    case 'admin':
        include 'wdd_site_view/web_pages/wdd_site_admin.php';
        break;
}