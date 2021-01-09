
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link href="<?php echo base_url('assets/prihlasovani/registrace.css'); ?>" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3><?php echo lang('create_user_heading'); ?></h3>
                        <p><?php echo lang('create_user_subheading'); ?></p>
                    </div>
                    <div class="card-body">
                        <div id="infoMessage"><?php echo $message; ?></div>

                        <?php echo form_open("auth/create_user"); ?>

                        <p>
                            <?php echo lang('create_user_fname_label', 'first_name'); ?> <br />
                            <?php echo form_input($first_name); ?>
                        </p>

                        <p>
                            <?php echo lang('create_user_lname_label', 'last_name'); ?> <br />
                            <?php echo form_input($last_name); ?>
                        </p>

                        <?php
                        if ($identity_column !== 'email') {
                            echo '<p>';
                            echo lang('create_user_identity_label', 'identity');
                            echo '<br />';
                            echo form_error('identity');
                            echo form_input($identity);
                            echo '</p>';
                        }
                        ?>

                        <p>
                            <?php echo lang('create_user_company_label', 'company'); ?> <br />
                            <?php echo form_input($company); ?>
                        </p>

                        <p>
                            <?php echo lang('create_user_email_label', 'email'); ?> <br />
                            <?php echo form_input($email); ?>
                        </p>

                        <p>
                            <?php echo lang('create_user_phone_label', 'phone'); ?> <br />
                            <?php echo form_input($phone); ?>
                        </p>

                        <p>
                            <?php echo lang('create_user_password_label', 'password'); ?> <br />
                            <?php echo form_input($password); ?>
                        </p>

                        <p>
                            <?php echo lang('create_user_password_confirm_label', 'password_confirm'); ?> <br />
                            <?php echo form_input($password_confirm); ?>
                        </p>

                        <div class="form-group">
                            <input type="submit" value="Register" lang="create_user_submit_btn" class="btn float-right login_btn">
                        </div>

                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
