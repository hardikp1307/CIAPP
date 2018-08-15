    <div class="col-lg-4 col-md-4"></div>
    <div class="col-lg-4 col-md-4 border border-secondary">
        <div class="">
            <div class="form-header bg-primary">
                <h1 class="text-center">Sign up</h1>
            </div>            
            <div class="contact-form">                
                <?php 
                    echo form_open($submit_url);  
                    if(!empty(validation_errors())) {
                ?>
                        <div class="alert alert-danger">
                            <strong>Warning! </strong>Please check the form for errors.                        
                        </div>
                <?php
                    } 
                ?>
                    <div class="form-group">
                        <input type="text" name="firstname" id="firstname" data-toggle="tooltip" title="<?php echo form_error('firstname', ' ', ' '); ?>" class="form-control <?php echo ((!empty(form_error('firstname'))) ? 'alert-danger' : ''); ?>" placeholder="First Name" value="<?php echo set_value('firstname'); ?>" required>                    
                        <?php /*if(!empty(form_error('firstname'))) { ?>
                            <br>
                            <div class="alert alert-danger">
                                <?php echo form_error('firstname'); ?>                        
                            </div>
                        <?php } */ ?>
                    </div>
                    <div class="form-group">
                        <input type="text" name="lastname" id="lastname" data-toggle="tooltip" title="<?php echo form_error('lastname', ' ', ' '); ?>" class="form-control <?php echo ((!empty(form_error('lastname'))) ? 'alert-danger' : '')?>" placeholder="Last Name" value="<?php echo set_value('lastname'); ?>" required>
                        <?php /* if(!empty(form_error('lastname'))) { ?>
                            <br>
                            <div class="alert alert-danger">
                                <?php echo form_error('lastname'); ?>                        
                            </div>
                        <?php } */ ?>
                    </div>
                    <div class="form-group">
                        <input type="text" name="email" id="email" data-toggle="tooltip" title="<?php echo form_error('email', ' ', ' '); ?>" class="form-control <?php echo ((!empty(form_error('email'))) ? 'alert-danger' : '')?>" placeholder="Email eg.: example@example.com" value="<?php echo set_value('email'); ?>" required>
                        <?php /* if(!empty(form_error('email'))) { ?>
                            <br>
                            <div class="alert alert-danger">
                                <?php echo form_error('email'); ?>                        
                            </div>
                        <?php } */ ?>
                    </div>
                    <div class="form-group">
                        <input type="text" name="username" id="username" data-toggle="tooltip" title="<?php echo form_error('username', ' ', ' '); ?>" class="form-control <?php echo ((!empty(form_error('username'))) ? 'alert-danger' : '')?>" placeholder="Username" value="<?php echo set_value('username'); ?>" required>
                        <?php /* if(!empty(form_error('username'))) { ?>
                            <br>
                            <div class="alert alert-danger">
                                <?php echo form_error('username'); ?>                        
                            </div>
                        <?php } */ ?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" data-toggle="tooltip" title="<?php echo form_error('password', ' ', ' '); ?>" class="form-control <?php echo ((!empty(form_error('password'))) ? 'alert-danger' : '')?>" placeholder="Password" value="<?php echo set_value('password'); ?>" required>
                        <?php /* if(!empty(form_error('password'))) { ?>
                            <br>
                            <div class="alert alert-danger">
                                <?php echo form_error('password'); ?>                        
                            </div>
                        <?php } */ ?>
                    </div>
                    <div class="form-group">
                        <input type="password" name="conf_password" id="conf_password" data-toggle="tooltip" title="<?php echo form_error('conf_password', ' ', ' '); ?>" class="form-control <?php echo ((!empty(form_error('conf_password'))) ? 'alert-danger' : '')?>" placeholder="Confirm Password" value="<?php echo set_value('conf_password'); ?>" required>
                        <?php /* if(!empty(form_error('conf_password'))) { ?>
                            <br>
                            <div class="alert alert-danger">
                                <?php echo form_error('conf_password'); ?>                        
                            </div>
                        <?php } */ ?>
                    </div>
                    <br>
                    <!--<div class="form-group"> -->
                        <button type="submit" id="register" class="btn btn-primary btn-lg btn-block">Register Me</button>
                    <!-- </div> -->
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4"></div>
    <script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>