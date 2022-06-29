<?= $this->extend('layouts/default') ?>
<?= $this->section('content') ?>
<div class="container">
<h3>Your file was successfully uploaded!</h3>

<ul>
    <li>name: <?= esc($uploaded_flleinfo->getBasename()) ?></li>
    <li>size: <?= esc($uploaded_flleinfo->getSizeByUnit('kb')) ?> KB</li>
    <li>extension: <?= esc($uploaded_flleinfo->guessExtension()) ?></li>
</ul>

<p><?= anchor('fileupload', 'Upload Another File!') ?></p>

</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<?= $this->endSection() ?>