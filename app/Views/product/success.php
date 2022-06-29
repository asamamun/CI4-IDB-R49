<?php echo view("partial/header"); ?>
<?php echo view("partial/nav"); ?>

    <div class="container">
        <?php echo anchor("products", "Back to products page",['class'=>"btn btn-primary"]); ?>
        <h1>Product <?php echo $name?> successfully added to cart</h1>
        <?php echo anchor("cart", "Go to cart",['class'=>"btn btn-primary"]); ?>
        <?php echo view("partial/footer"); ?>