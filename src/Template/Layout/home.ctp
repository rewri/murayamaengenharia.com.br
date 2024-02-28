<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php echo $this->element('Default/metaTags') ?>
    <title><?php echo $defaultPageTitle; ?></title>
    <?php echo $this->Html->css(array(
        'bootstrap-grid.min.css',
        'bootstrap.min.css',
        'fontawesome-all.min.css',
        'simple-line-icons.css',
        'floating-wpp.css',
        'base.css',
        'style.css',
        'home.css',
    )) ?>
    <?php echo $this->fetch('cssTop') ?>
</head>

<body>
    <?php echo $this->element('Default/googleTagManager') ?>
    <?php echo $this->element('Default/topbar'); ?>
    <?php echo $this->element('Default/navbar'); ?>
    <?php echo $this->fetch('content'); ?>
    <?php echo $this->element('Default/footer'); ?>
    <?php echo $this->element('Default/side-social-icons') ?>
    <?php echo $this->Html->script(array(
        'jquery.min.js',
        'bootstrap.bundle.min.js',
        'fontawesome.min.js',
        'floating-wpp.js',
        'custom.js',
        'home.js',
    )) ?>
    <?php echo $this->fetch('scriptBottom') ?>
</body>

</html>