<?php echo view("partial/header"); ?>
<?php echo view('partial/nav'); ?>
    <div class="container">
<h3>welcome to Users page</h3>

        <?php foreach ($posts as $post) : ?>
            <div class="card">
  <h5 class="card-header"><?php echo $post['post_title']; ?></h5>
  <div class="card-body">
    <!-- <h5 class="card-title"></h5> -->
    <p class="card-text"> <?php echo $post['post_content']; ?></p>
    <a href="<?php echo $post['guid'] ?>" class="btn btn-primary">Details</a>
  </div>
</div>
<hr>
        <?php endforeach; ?>
    </tbody>
</table>
<?php echo $pager->links() ?>
<?php //echo  $pager->simpleLinks() ?>
    </div>
<?php echo view("partial/footer"); ?>