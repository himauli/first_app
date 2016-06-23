<?php

require_once("include.php");


$pageTitle = "Register Address" ;
require_once(__ROOT__."/views/layout/header.php");
require_once(__ROOT__."/models/Address.php");

use models\Address;
$ad = new Address();

if(isset($_POST['Address']))
{
    if($ad->loadPostData( $_POST['Address'] ))
    {

        if($ad->save($ad->tableName()))
        {
            echo "Your address have been successfully registered." ;
            exit;
        }

    }
}

require_once(__ROOT__."/views/content/registerAddress.php");

require_once(__ROOT__."/views/layout/footer.php");


?>