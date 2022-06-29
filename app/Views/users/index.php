<?php echo view("partial/header"); ?>
<?php echo view('partial/nav'); ?>
    <div class="container">
<h3>welcome to Users page</h3>
<?php echo anchor("users/new","Add New User",['class'=>'btn btn-primary','title'=>'add new user']) ?> | 
<?php echo anchor("users/form","User validation alternative method",['class'=>'btn btn-primary','title'=>'add new user']) ?>
<table class="table table-responsive">
    <thead>
        <tr>            
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Active</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Deleted At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($allusers as $user) : ?>
        <tr>            
        <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['is_active']; ?></td>
            <td><?php echo $user['created_at']; ?></td>
            <td><?php echo $user['updated_at']; ?></td>
            <td><?php echo $user['deleted_at']; ?></td>
            <td>
                <?php echo anchor('users/edit/'.$user['id'], 'Edit'); ?>
                <?php echo anchor('users/delete/'.$user['id'], 'Delete'); ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $pager->links() ?>
<?php //echo  $pager->simpleLinks() ?>
    </div>
<?php echo view("partial/footer"); ?>