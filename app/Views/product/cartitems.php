
<?php echo view("partial/header"); ?>
<?php echo view("partial/nav"); ?>
<div class="container">
    <h3>Total :<?php echo $total;?> item<?php echo $total>1?"s":""; ?></h3>
<?php
$table = '<table class="table table-responsive table-striped"><thead><tr><th>Name</th><th>Price</th><th>Quantity</th><th>Total</th><th>Action</th></tr></thead><tbody>';
        foreach ($allItems as $items) {
          foreach ($items as $item) {
              $table .= '<tr><td>'.$item['attributes']['name'].'</td><td>'.$item['attributes']['price'].'</td><td>'.$item['quantity'].'</td><td>'.($item['quantity'] * $item['attributes']['price'] ).'</td>';
              $table .= '<td>'.anchor('cart/remove/'.$item['id'], 'Remove').'</td></tr>';
            // echo 'ID: '.$item['id'].'<br />';
            // echo 'Name: '.$item['name'].'<br />';
            // echo 'Qty: '.$item['quantity'].'<br />';
            // echo 'Price: '.$item['quantity'].'<br />';

          }
        }
        $table .= '</tbody></table>';
        echo $table;
        ?>
        <div class="d-flex justify-content-between">
          <div>
            <textarea name="comment" class="form-control"></textarea>
          </div>
            <?php echo anchor('cart/checkout', 'Checkout',['class'=>"btn btn-primary"]); ?>
        </div>
        </div>
<?php echo view("partial/footer"); ?>