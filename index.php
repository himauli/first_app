<?php

require_once("include.php");


$pageTitle = "Register" ;
require_once(__ROOT__."/views/layout/header.php");


require_once(__ROOT__."/models/Users.php");

use models\Users;
$u = new Users();

if(isset($_POST['Users']))
{

    \helper\Helper::printR("We are passing",0);
    \helper\Helper::printR($_POST['Users'], 0);

    if($u->loadPostData( $_POST['Users'] ))
    {
        \helper\Helper::printR("And we get this labels",0);

        \helper\Helper::printR($u->attributes);
    }
}




require_once(__ROOT__."/views/content/register.php");




require_once(__ROOT__."/views/layout/footer.php");


?>