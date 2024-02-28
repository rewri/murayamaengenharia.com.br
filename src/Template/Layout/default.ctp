<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?php echo $this->element('Default/metaTags') ?>
    <title><?php echo $defaultPageTitle; ?><?php echo !empty($title) ? " - {$title}" : null; ?></title>
    <?php echo $this->Html->css(array(
        'bootstrap-grid.min.css',
        'bootstrap.min.css',
        'fontawesome-all.min.css',
        'simple-line-icons.css',
        'floating-wpp.css',
        'lightbox.css',
        'base.css',
        'style.css',
        'home.css',
    )) ?>
    <?php echo $this->fetch('cssTop') ?>
</head>

<body>
    <?php echo $this->element('Default/googleTagManager') ?>
    <?php echo $this->element('Default/topbar'); ?>
    <?php echo $this->element('Default/fixed-navbar'); ?>
    <?php echo $this->fetch('content') ?>
    <?php echo $this->element('Default/footer'); ?>
    <?php echo $this->element('Default/side-social-icons') ?>
    <?php echo $this->Html->script(array(
        'jquery.min.js',
        'bootstrap.bundle.min.js',
        'fontawesome.min.js',
        'floating-wpp.js',
        'lightbox.js',
        'custom.js',
    )) ?>
    <?php echo $this->fetch('scriptBottom') ?>
</body>

</html>