<!DOCTYPE html>
<html lang="pt-br">
<head>
<?php echo $this->element('Default/metaTags') ?>
    <title><?php echo $defaultPageTitle ?></title>
<?php echo $this->Html->css(array(
    'bootstrap.min.css',
    'bootstrap-grid.min.css',
    'base.css',
    'style.css'
)) ?>
<?php echo $this->fetch('cssTop') ?>
</head>
<body>
    <?php echo $this->fetch('content') ?>
    <?php echo $this->Html->script(array(
        'jquery.min.js',
        'bootstrap.bundle.min.js',
    )) ?>
    <?php echo $this->fetch('scriptBottom') ?>
</body>
</html>
