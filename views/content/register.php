<?php

use models\Users;
$u = new Users();

?>

<div class="container">


    <div class="register-box" >
        <div  class="panel panel-primary register-box-child">
            <div class="panel-heading">
                <h3 class="panel-title">Register</h3>
            </div>
            <div class="panel-body">

                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" >

                    <div class="form-group" id="<?php echo $u->getHolderId('email');?>" >
                        <label for="<?php echo $u->getId('email');?>"><?php echo $u->getAttributeLable('email'); ?></label>
                        <input name="<?php echo $u->getName('email');?>" type="email" class="form-control" id="<?php echo $u->getId('email');?>" placeholder="<?php echo $u->getAttributeLable('email'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $u->getHolderId('first_name');?>" >
                        <label for="<?php echo $u->getId('first_name');?>"><?php echo $u->getAttributeLable('first_name'); ?></label>
                        <input name="<?php echo $u->getName('first_name');?>" type="text" class="form-control" id="<?php echo $u->getId('first_name');?>" placeholder="<?php echo $u->getAttributeLable('first_name'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $u->getHolderId('last_name');?>" >
                        <label for="<?php echo $u->getId('last_name');?>"><?php echo $u->getAttributeLable('last_name'); ?></label>
                        <input name="<?php echo $u->getName('last_name');?>" type="text" class="form-control" id="<?php echo $u->getId('last_name');?>" placeholder="<?php echo $u->getAttributeLable('last_name'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $u->getHolderId('username');?>" >
                        <label for="<?php echo $u->getId('username');?>"><?php echo $u->getAttributeLable('username'); ?></label>
                        <input name="<?php echo $u->getName('username');?>" type="text" class="form-control" id="<?php echo $u->getId('username');?>" placeholder="<?php echo $u->getAttributeLable('username'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $u->getHolderId('password');?>" >
                        <label for="<?php echo $u->getId('password');?>"><?php echo $u->getAttributeLable('password'); ?></label>
                        <input name="<?php echo $u->getName('password');?>" type="password" class="form-control" id="<?php echo $u->getId('password');?>" placeholder="<?php echo $u->getAttributeLable('password'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $u->getHolderId('profile_picture');?>" >
                        <label for="<?php echo $u->getId('profile_picture');?>"><?php echo $u->getAttributeLable('profile_picture'); ?></label>
                        <input name="<?php echo $u->getName('profile_picture');?>" type="text" class="form-control" id="<?php echo $u->getId('profile_picture');?>" placeholder="<?php echo $u->getAttributeLable('profile_picture'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $u->getHolderId('contact_no');?>" >
                        <label for="<?php echo $u->getId('contact_no');?>"><?php echo $u->getAttributeLable('contact_no'); ?></label>
                        <input name="<?php echo $u->getName('contact_no');?>" type="text" class="form-control" id="<?php echo $u->getId('contact_no');?>" placeholder="<?php echo $u->getAttributeLable('contact_no'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>


            </div>
        </div>
    </div>



</div>

?>
