<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>
<div class="container">
<?php foreach ($errors as $error): ?>
    <li><?= esc($error) ?></li>
<?php endforeach ?>

<?= form_open_multipart('/fileupload') ?>

<input type="file" name="userfile" size="20" />

<br /><br />

<input type="submit" value="upload" />

</form>

</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>