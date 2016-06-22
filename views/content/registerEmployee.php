<?php

use models\Employee;
$e = new Employee();

?>

<div class="container">


    <div class="register-box" >
        <div  class="panel panel-primary register-box-child">
            <div class="panel-heading">
                <h3 class="panel-title">Register Employee</h3>
            </div>
            <div class="panel-body">

                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" >

                    <div class="form-group" id="<?php echo $e->getHolderId('email');?>" >
                        <label for="<?php echo $e->getId('email');?>"><?php echo $e->getAttributeLable('email'); ?></label>
                        <input name="<?php echo $e->getName('email');?>" type="email" class="form-control" id="<?php echo $e->getId('email');?>" placeholder="<?php echo $e->getAttributeLable('email'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $e->getHolderId('first_name');?>" >
                        <label for="<?php echo $e->getId('first_name');?>"><?php echo $e->getAttributeLable('first_name'); ?></label>
                        <input name="<?php echo $e->getName('first_name');?>" type="text" class="form-control" id="<?php echo $e->getId('first_name');?>" placeholder="<?php echo $e->getAttributeLable('first_name'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $e->getHolderId('last_name');?>" >
                        <label for="<?php echo $e->getId('last_name');?>"><?php echo $e->getAttributeLable('last_name'); ?></label>
                        <input name="<?php echo $e->getName('last_name');?>" type="text" class="form-control" id="<?php echo $e->getId('last_name');?>" placeholder="<?php echo $e->getAttributeLable('last_name'); ?>">
                        <span  class="help-block"></span>
                    </div>


                    <div class="form-group" id="<?php echo $e->getHolderId('username');?>" >
                        <label for="<?php echo $e->getId('username');?>"><?php echo $e->getAttributeLable('username'); ?></label>
                        <input name="<?php echo $e->getName('username');?>" type="text" class="form-control" id="<?php echo $e->getId('username');?>" placeholder="<?php echo $e->getAttributeLable('username'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $e->getHolderId('password');?>" >
                        <label for="<?php echo $e->getId('password');?>"><?php echo $e->getAttributeLable('password'); ?></label>
                        <input name="<?php echo $e->getName('password');?>" type="password" class="form-control" id="<?php echo $e->getId('password');?>" placeholder="<?php echo $e->getAttributeLable('password'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $e->getHolderId('profile_picture');?>" >
                        <label for="<?php echo $e->getId('profile_picture');?>"><?php echo $e->getAttributeLable('profile_picture'); ?></label>
                        <input name="<?php echo $e->getName('profile_picture');?>" type="text" class="form-control" id="<?php echo $e->getId('profile_picture');?>" placeholder="<?php echo $e->getAttributeLable('profile_picture'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $e->getHolderId('contact_no');?>" >
                        <label for="<?php echo $e->getId('contact_no');?>"><?php echo $e->getAttributeLable('contact_no'); ?></label>
                        <input name="<?php echo $e->getName('contact_no');?>" type="text" class="form-control" id="<?php echo $e->getId('contact_no');?>" placeholder="<?php echo $e->getAttributeLable('contact_no'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>


            </div>
        </div>
    </div>



</div>



