
<!-- === Sign In === -->
<?php echo form_open('signin');?>

<section class="form">
    <div class="row">
        <div class="large-6 large-centered columns formpadding">

            <h5 class="form-title greyDark">Sign In</h5>
            <br/>
            <div>
                <?php
                    echo form_label('Email Address', 'email_address');
                    echo form_input('email_address', '','id="email_address"');
                ?>
            </div>

            <div>
                <?php
                    echo form_label('Password', 'password');
                    echo form_password('password', '','id="password"');
                ?>
            </div>

            <div class="row">
                <div class="large-12  columns">
                    <div><?php echo form_submit('submit', 'login');?><a class="button secondary radius wide">Sign in</a></div>
                </div>
            </div>
        <?php echo form_close();?>
<style> .errors {color: red;}</style>
<div class="errors"><?php echo validation_errors();?></div>
        </div>
    </div>
</section>

<!-- === End Sign In === -->
