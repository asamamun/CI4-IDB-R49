<?php echo view("partial/header"); ?>
<?php echo view("partial/nav"); ?>
<div class="container">
    <h3>Text Helper fx:</h3>
    <?php for($i=1;$i<200;$i++) {
       $content =  $faker->text(3000);
    ?>
        <h3><?php echo $faker->name(); ?></h3>
        <p><?php echo word_limiter($content,30); ?>...</p>
        <p> <?php echo word_censor($content,$censorwords,"*********"); ?></p>
        <p><?php echo $faker->city(); ?> , <?php echo $faker->country(); ?></p>
    <?php  
} ?>


</div>

<?php echo view("partial/footer"); ?>