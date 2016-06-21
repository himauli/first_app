<?php
session_start();

error_reporting(E_ALL);


define('__ROOT__',dirname(__FILE__));

use connection\Connection;
use helper\Helper;

require_once(__ROOT__.'/helper/Helper.php');
require_once(__ROOT__.'/config/Config.php');
require_once(__ROOT__.'/connection/Connection.php');
require_once(__ROOT__.'/models/Model.php');


$conn = new Connection();
$conn = $conn->init();

$config =  new \config\Config();

$baseUrl = Helper::url();
$bootstrapPath =  $baseUrl."assets/plugins/bootstrap/";

$faPath =  $baseUrl."assets/plugins/font-awesome/";
$jqueryPath =  $baseUrl."assets/plugins/jquery/";
$sitePath =  $baseUrl."assets/site/";



?>