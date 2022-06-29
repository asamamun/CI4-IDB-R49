<?php echo view("partial/header"); ?>
<?php echo view('partial/nav'); ?>
    <div class="container">
<h3>Add New User</h3>
<?= $validation->listErrors() ?>
<h4>uncomment csrf in config->filters.php file for csrf token</h4>
<?php echo form_open('users/new'); ?>

<div class="form-group">
    <label for="first_name">First Name</label>
    <!-- <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"> -->
   <?php
    $data = [
    'name'      => 'first_name',
    'id'        => 'first_name',
    'value'     => set_value('first_name'),
    'class'     => 'form-control',
    'maxlength' => '100',
    'placeholder' => 'First Name',
    // 'size'      => '50',
    // 'style'     => 'width:50%',
];

echo form_input($data);
?>
</div>
<div class="form-group">
    <label for="last_name">Last Name</label>
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo set_value('last_name')?>">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo set_value('email')?>">
</div>
<div class="form-group">
    <label for="submit"></label>
    <input type="submit" class="btn btn-primary" value="Submit">
</div>
<?php echo form_close(); ?>


    </div>
<?php echo view("partial/footer"); ?>