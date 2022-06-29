<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="d-flex justify-content-between">
    <h3>All Products</h3>
    <!-- <a class="btn btn-primary" href="#"><i class="fas fa-file-pdf"></i></a> -->
    <?php echo anchor('pdf/download',"<i class='fas fa-file-pdf'></i>",['class'=>'btn btn-secondary']) ?>
    </div>
    
    <table id="myTable" class="table table-responsive">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Code</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($products as $product){ ?>
                <tr>
                    <td><?= $product['product_id'] ?></td>
                    <td><?= $product['product_name'] ?></td>
                    <td><?= $product['product_code'] ?></td>
                    <td><?= $product['product_description'] ?></td>
                    <td><?= $product['category_id'] ?></td>
                    <td><?= $product['product_price'] ?></td>
                </tr>
                <?php } ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
       // alert(5);
    });    
</script>
<?= $this->endSection() ?>