<?php echo view("partial/header"); ?>
<?php echo view("partial/nav"); ?>
<div class="container">
<!-- create product form -->

<div class="row">

    <div class="col-md-12">
        <h1>Create Product</h1>
        <?php echo form_open('product/create'); ?>
        <div class="form-group">
            <label for="product_name">Product Name</label>
            <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name">
        </div>
        <div class="form-group">
            <label for="product_description">Product Description</label>
            <textarea class="form-control" id="product_description" name="product_description" rows="3"></textarea>
        </div>
        <div class="form-group">
            <label for="product_code">Product Code</label>
            <input type="text" class="form-control" id="product_code" name="product_code" placeholder="Enter product code">
        </div>
        <div class="form-group">
            <label for="product_price">Product Price</label>
            <input type="text" class="form-control" id="product_price" name="product_price" placeholder="Enter product price">
        </div>
        <div class="form-group">
            <label for="category_id">Product Category</label>
            <select class="form-control" id="category_id" name="category_id">
                <?php foreach ($categories as $category) { ?>
                    <option value="<?php echo $category['cat_id']; ?>"><?php echo $category['cat_name']; ?></option>
                <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <?php echo form_close(); ?>
</div>
<?php echo view("partial/footer"); ?>