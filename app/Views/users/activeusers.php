<table class="table table-responsive">
    <caption><?php echo $caption; ?></caption>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Active</th>        
        <th>Action</th>
    </tr>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?php echo $user['id']; ?></td>
            <td><?php echo $user['first_name']; ?> <?php echo $user['last_name']; ?></td>
            <td><?php echo $user['email']; ?></td>
            <td><?php echo $user['is_active']; ?></td>
            <td>
                <?php echo anchor('users/edit/'.$user['id'], 'Edit'); ?>
                <?php echo anchor('users/delete/'.$user['id'], 'Delete'); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
