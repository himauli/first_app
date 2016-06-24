<?php

require_once("include.php");


$pageTitle = "Register Books" ;
require_once(__ROOT__."/views/layout/header.php");
require_once(__ROOT__."/models/Book.php");

use models\Book;
$ad = new Book();

if(isset($_POST['Book']))
{
    if($ad->loadPostData( $_POST['Book'] ))
    {

        if($ad->save())
        {
            echo "Your order have been recorded successfully." ;
            exit;
        }

    }
}

require_once(__ROOT__."/views/content/registerBook.php");

require_once(__ROOT__."/views/layout/footer.php");

?>