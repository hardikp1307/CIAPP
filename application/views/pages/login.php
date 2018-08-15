<div class="col-lg-4 col-md-4"></div>
    <div class="col-lg-4 col-md-4 border border-secondary">
        <div class="">
            <div class="form-header bg-primary">
                <h1 class="text-center">Sign In</h1>
            </div>            
            <div class="contact-form">                
                <?php 
                    echo form_open($submit_url);  
                    if(!empty(validation_errors())) {
                ?>
                        <div class="alert alert-danger">
                            <strong>Warning! </strong> Username or password is not valid                        
                        </div>
                <?php
                    } 
                ?>
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
                    <div class = "form-group">
                            <a href="#" class="forgotPass" id="forgotPass">Forgot password?</a>
                    </div>
                    <br>
                    <!--<div class="form-group"> -->
                        <button type="submit" id="login" class="btn btn-primary btn-lg btn-block">Sign In</button>
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