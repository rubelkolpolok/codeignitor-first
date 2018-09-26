<h2>Login form</h2>
<?php
$attribute = ['id' => 'login_form', 'class' => 'form_horizontal'];
?>
<!--Validation errors shows-->
<?php if ($this->session->flashdata('errors')) : ?>
<?php echo $this->session->flashdata('errors'); ?>
<?php endif; ?>

<?php echo form_open('user/login', $attribute); ?>
<div class="form-group">
    <?php echo form_label('User name'); ?>

    <?php
        $data = [
            'class' => 'form-control',
            'name' => 'user_name',
            'placeholder' => 'user name'
        ];
    ?>
    <?php echo form_input($data); ?>
</div>
<div class="form-group">
    <?php echo form_label('Password'); ?>

    <?php
        $data = [
            'class' => 'form-control',
            'name' => 'password',
            'placeholder' => 'password'
        ];
    ?>
    <?php echo form_password($data); ?>
</div>
<div class="form-group">
    <?php echo form_label('Confirm Password'); ?>

    <?php
        $data = [
            'class' => 'form-control',
            'name' => 'confirm_password',
            'placeholder' => 'Confirm password'
        ];
    ?>
    <?php echo form_password($data); ?>
</div>
<div class="form-group">
    <?php
        $data = [
             'class' => 'btn btn-primary btn-block',
             'name' => 'submit',
             'value' => 'submit'
        ];
    ?>
    <?php echo form_submit($data); ?>
</div>


<?php echo form_close(); ?>
