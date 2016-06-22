<?php

use models\Admin;
$a = new Admin();

?>

<div class="container">

    <div class="register-box">
        <div class="panel panel-primary register-box-child">
            <div class="panel-heading">
                <h3 class="panel-title">Register Admin</h3>
            </div>

            <div class="panel-body">

                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" >

                    <div class="form-group" id="<?php echo $a->getHolderId('first_name');?>" >
                        <label for="<?php echo $a->getId('first_name');?>"><?php echo $a->getAttributeLable('first_name'); ?></label>
                        <input name="<?php echo $a->getName('first_name');?>" type="text" class="form-control" id="<?php echo $a->getId('first_name');?>" placeholder="<?php echo $a->getAttributeLable('first_name'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $a->getHolderId('last_name');?>" >
                        <label for="<?php echo $a->getId('last_name');?>"><?php echo $a->getAttributeLable('last_name'); ?></label>
                        <input name="<?php echo $a->getName('last_name');?>" type="text" class="form-control" id="<?php echo $a->getId('last_name');?>" placeholder="<?php echo $a->getAttributeLable('last_name'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $a->getHolderId('email');?>" >
                        <label for="<?php echo $a->getId('email');?>"><?php echo $a->getAttributeLable('email'); ?></label>
                        <input name="<?php echo $a->getName('email');?>" type="email" class="form-control" id="<?php echo $a->getId('email');?>" placeholder="<?php echo $a->getAttributeLable('email'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $a->getHolderId('password');?>" >
                        <label for="<?php echo $a->getId('password');?>"><?php echo $a->getAttributeLable('password'); ?></label>
                        <input name="<?php echo $a->getName('password');?>" type="password" class="form-control" id="<?php echo $a->getId('password');?>" placeholder="<?php echo $a->getAttributeLable('password'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>


                </form>
             </div>
        </div>
    </div>
</div>

