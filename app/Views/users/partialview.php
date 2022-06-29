<?= $this->extend('layouts/default') ?>

<?= $this->section('content') ?>
    <div class="row">
        <div class="col-6">
            <h1>Active Users</h1>
            <?php echo view("users/activeusers",['users'=>$activeusers,'caption'=>"Active Users"]); ?>
        </div>
        <div class="col-6">
            <h1>Inactive Users</h1>
            <?php echo view("users/activeusers",['users'=>$inactiveusers,'caption'=>"Inactive Users"]); ?>
        </div>
    </div>

<?= $this->endSection() ?>


<?= $this->section('script') ?>
    <script>
        alert("hi");
    </script>
<?= $this->endSection() ?>