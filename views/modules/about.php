<?php $about = include(ROOT . '/config/about.php'); ?>
<?php foreach ($about as $key => $content): ?>
<dl>
    <dt><?php echo $key; ?></dt>
    <dd><?php echo $content; ?></dd>
</dl>
<?php endforeach; ?>