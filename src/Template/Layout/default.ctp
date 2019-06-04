<!DOCTYPE html>
<html>
<head>
    <?php echo $this->Html->charset() ?>
    <?php echo $this->element('Default/metaTags') ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $defaultPageTitle ?></title>

    <?php echo $this->Html->css('base.css') ?>
    <?php echo $this->Html->css('style.css') ?>

    <?php echo $this->fetch('css') ?>
    <?php echo $this->fetch('script') ?>

</head>
<body>
    <?php echo $this->fetch('content') ?>
</body>
</html>
