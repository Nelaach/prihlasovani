
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link href="<?php echo base_url('assets/prihlasovani/styles.css'); ?>" rel="stylesheet">
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo lang('login_heading'); ?>
                        </h3>
                        <p><?php echo lang('login_subheading'); ?></p>
                    </div>
                    <div class="card-body">
                        <div id="infoMessage"><?php echo $message; ?></div>

                        <?php echo form_open("auth/login"); ?>

                        <p>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                            <?php echo form_input($identity); ?>
                        </div>
                        </p>


                        <p>
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>

                            <?php echo form_input($password); ?>
                        </div>

                        </p>

                        <p>
                            <?php echo lang('login_remember_label', 'remember'); ?>
                            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"'); ?>
                        </p>


                        <div class="form-group">
                            <input type="submit" value="Login" class="btn float-right login_btn">
                        </div>

                        <?php echo form_close(); ?>

                        <p><a href="forgot_password"><?php echo lang('login_forgot_password'); ?></a></p>
                    </div>
                </div></div></div>
    </body>

</html>