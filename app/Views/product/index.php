<?php echo view("partial/header"); ?>
<?php echo view("partial/nav"); ?>
<div class="container">
    <div class="d-flex justify-content-between">
        <div>
        categories : <?php foreach ($cat as $c) {
       echo anchor('product/category/'.$c['cat_id'], $c['cat_name']) . ' ';
    } ?>
        </div>
        <div>
            <?php echo anchor('product/create', 'Create Product',['class'=>'btn btn-primary']); ?>
            <!-- cart icon -->
            <?php echo anchor('cart', '<i class="fas fa-shopping-cart"></i>('.$totalitems.')',['class'=>'btn btn-primary']); ?>

        </div>
    </div>
    
    <h1>All Products </h1>
    <div class="row">
    <?php
    foreach ($products as $product) {
        echo "<div class='col-3'>";
        echo "<div class='card'>";
        echo "<img class='card-img-top' src='https://picsum.photos/id/".$product['product_id']."/200/300' alt='Card image cap'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>" . $product['product_name'] . "</h5>";
        echo "<p class='card-text'>" . $product['product_description'] . "<br>";
        echo "Price: " . $product['product_price'] . "</p>";

        echo "<a href='" . base_url() . "/addtocart/" . $product['product_id'] . "' class='btn btn-primary'>Add to Cart</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>
    </div>
</div>
<?php echo view("partial/footer"); ?>