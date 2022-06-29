<?php echo view("partial/header"); ?>
<?php echo view("partial/nav"); ?>
<div class="container">
    <h1>All Users </h1>
    <?php

    if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
        unset($_SESSION['message']);
    }
    ?>
    <table id="usertable" class="table table-striped display">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo $user['id']; ?></td>
                    <td><?php echo $user['first_name']. " " . $user['last_name']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['is_active']; ?></td>
                    <td>
                        <a href="<?php echo base_url('users/' . $user['id']); ?>" class="btn btn-info">View</a>
                        <a href="<?php echo base_url('users/' . $user['id'] . '/edit'); ?>" class="btn btn-primary">Edit</a>
                        <a href="<?php echo base_url('users/' . $user['id'] . '/delete'); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#usertable').DataTable();
    });
</script>
<?php echo view("partial/footer"); ?>