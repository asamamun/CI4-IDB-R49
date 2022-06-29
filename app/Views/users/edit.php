<?php echo view("partial/header"); ?>
<?php echo view('partial/nav'); ?>
    <div class="container">
<h3>Edit User</h3>
<h4>uncomment csrf in config->filters.php file for csrf token</h4>
<?php echo form_open('users/update'); ?>
<?php echo form_hidden('id', $user['id']); ?>
<div class="form-group">
    <label for="first_name">First Name</label>
    <!-- <input type="text" class="form-control" id="first_name" name="first_name" placeholder="First Name"> -->
   <?php
    $data = [
    'name'      => 'first_name',
    'id'        => 'first_name',
    'value'     => $user['first_name'],
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
    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Last Name" value="<?php echo $user['last_name']?>">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $user['email']?>">
</div>
<div class="form-group">
    <label for="email">Active</label>
    <select name="is_active" id="is_active" class="form-control">
        <option value="1" <?php echo ($user['is_active'] == 1) ? 'selected' : ''; ?>>Active</option>
        <option value="0" <?php echo ($user['is_active'] == 0) ? 'selected' : ''; ?>>Inactive</option>
    </select>
</div>
<div class="form-group">
    <label for="submit"></label>
    <input type="submit" class="btn btn-primary" value="Submit">
</div>
<?php echo form_close(); ?>


    </div>
<?php echo view("partial/footer"); ?>