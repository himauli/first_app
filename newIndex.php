<?php

require_once("include.php");


$pageTitle = "Register Employee" ;
require_once(__ROOT__."/views/layout/header.php");
require_once(__ROOT__."/models/Employee.php");

use models\Employee;
$e = new Employee();

if(isset($_POST['Employee']))
{
    //\helper\Helper::printR("We are passing",0);
    //\helper\Helper::printR($_POST['Users'], 0);

    if($e->loadPostData( $_POST['Employee'] ))
    {
        //\helper\Helper::printR("And we get this labels",0);
        //\helper\Helper::printR($u->attributes , 0);

        if($e->save($e->tableName()))
        {
            echo "You have been successfully signed up." ;
            exit;
        }


    }
}




require_once(__ROOT__."/views/content/registerEmployee.php");




require_once(__ROOT__."/views/layout/footer.php");


?>