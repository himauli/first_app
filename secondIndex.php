<?php

require_once("include.php");

$pageTitle = "Register Admin";

require_once(__ROOT__."/views/layout/header.php");
require_once(__ROOT__."/models/Admin.php");

use models\Admin;
$a = new Admin();

if(isset($_POST['Admin']))
{
    if($a->loadPostData($_POST['Admin']))
    {
        if($a->save())
        {
            echo "You have been successfully signed up.";
            exit;
        }
    }
}

require_once(__ROOT__."/views/content/registerAdmin.php");

require_once(__ROOT__."/views/layout/footer.php");


?>