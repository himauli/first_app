<?php

use models\Book;
$b = new Book();

?>

<div class="container">


    <div class="register-box" >
        <div  class="panel panel-primary register-box-child">
            <div class="panel-heading">
                <h3 class="panel-title">Register Books</h3>
            </div>
            <div class="panel-body">

                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" >

                    <div class="form-group" id="<?php echo $b->getHolderId('book_title');?>" >
                        <label for="<?php echo $b->getId('book_title');?>"><?php echo $b->getAttributeLable('book_title'); ?></label>
                        <input name="<?php echo $b->getName('book_title');?>" type="text" class="form-control" id="<?php echo $b->getId('book_title');?>" placeholder="<?php echo $b->getAttributeLable('book_title'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $b->getHolderId('book_author');?>" >
                        <label for="<?php echo $b->getId('book_author');?>"><?php echo $b->getAttributeLable('book_author'); ?></label>
                        <input name="<?php echo $b->getName('book_author');?>" type="text" class="form-control" id="<?php echo $b->getId('book_author');?>" placeholder="<?php echo $b->getAttributeLable('book_author'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $b->getHolderId('book_type');?>" >
                        <label for="<?php echo $b->getId('book_type');?>"><?php echo $b->getAttributeLable('book_type'); ?></label>
                        <input name="<?php echo $b->getName('book_type');?>" type="text" class="form-control" id="<?php echo $b->getId('book_type');?>" placeholder="<?php echo $b->getAttributeLable('book_type'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $b->getHolderId('book_prise');?>" >
                        <label for="<?php echo $b->getId('book_prise');?>"><?php echo $b->getAttributeLable('book_prise'); ?></label>
                        <input name="<?php echo $b->getName('book_prise');?>" type="text" class="form-control" id="<?php echo $b->getId('book_prise');?>" placeholder="<?php echo $b->getAttributeLable('book_prise'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>


            </div>
        </div>
    </div>



</div>
