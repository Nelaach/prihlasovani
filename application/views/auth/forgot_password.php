
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link href="<?php echo base_url('assets/prihlasovani/styles.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
            <h3><?php echo lang('forgot_password_heading'); ?></h3>
            <p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label); ?></p>
 </div>   
                    <div class="card-body">
                                    <div id="infoMessage"><?php echo $message; ?></div>

                                    <?php echo form_open("auth/forgot_password"); ?>
                        <div>
            <p>
                <label for="identity"><?php echo (($type == 'email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label)); ?></label> <br />
                <?php echo form_input($identity); ?>
            </p>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="send" lang="forgot_password_submit_btn" class="btn float-right login_btn">
                        </div>

            <?php echo form_close(); ?>
                    </div>
        </div>
            </div> 
                </div> 
    </body>
</html>