<?php if ($this->session->flashdata('login_success')): ?>
<p class="bg-success">
    <?php echo $this->session->flashdata('login_success'); ?>
</p>
<?php endif; ?>

<?php if ($this->session->flashdata('login_fail')): ?>
    <p class="bg-danger">
        <?php echo $this->session->flashdata('login_fail'); ?>
    </p>
<?php endif; ?>


<h1>Hello we are here!</h1>