<?php echo view("partial/header"); ?>
<?php echo view('partial/nav'); ?>
    <div class="container">
<h3>Email us</h3>
<!-- email us form -->
<?php echo form_open('email/send'); ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="subject">Subject</label>
        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
    </div>
    <div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php echo form_close(); ?>
    </div>
<?php echo view("partial/footer"); ?>