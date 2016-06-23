<?php

use models\Address;
$ad = new Address();

?>

<div class="container">


    <div class="register-box" >
        <div  class="panel panel-primary register-box-child">
            <div class="panel-heading">
                <h3 class="panel-title">Register Address</h3>
            </div>
            <div class="panel-body">

                <form action="<?php $_SERVER['PHP_SELF']?>" method="POST" >

                    <div class="form-group" id="<?php echo $ad->getHolderId('street');?>" >
                        <label for="<?php echo $ad->getId('street');?>"><?php echo $ad->getAttributeLable('street'); ?></label>
                        <input name="<?php echo $ad->getName('street');?>" type="text" class="form-control" id="<?php echo $ad->getId('street');?>" placeholder="<?php echo $ad->getAttributeLable('street'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $ad->getHolderId('city');?>" >
                        <label for="<?php echo $ad->getId('city');?>"><?php echo $ad->getAttributeLable('city'); ?></label>
                        <input name="<?php echo $ad->getName('city');?>" type="text" class="form-control" id="<?php echo $ad->getId('city');?>" placeholder="<?php echo $ad->getAttributeLable('city'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <div class="form-group" id="<?php echo $ad->getHolderId('state');?>" >
                        <label for="<?php echo $ad->getId('state');?>"><?php echo $ad->getAttributeLable('state'); ?></label>
                        <input name="<?php echo $ad->getName('state');?>" type="text" class="form-control" id="<?php echo $ad->getId('state');?>" placeholder="<?php echo $ad->getAttributeLable('state'); ?>">
                        <span  class="help-block"></span>
                    </div>

                    <button type="submit" class="btn btn-success">Submit</button>
                </form>


            </div>
        </div>
    </div>



</div>
