<title>

    <?= $this->fetch('title') ?>
</title>
<?= $this->Html->meta('icon') ?>

<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>

<?= $this->Html->css('bootstrap.css') ?>
<?= $this->Html->css('bootstrap-select.min.css') ?>
<?= $this->Html->css('magnific-popup.css') ?>
<?= $this->Html->css('jquery.slider.min.css') ?>
<?= $this->Html->css('owl.carousel.css') ?>
<?= $this->Html->css('style.css') ?>
<?= $this->Html->css('font-awesome.css') ?>

<?= $this->fetch('meta') ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('script') ?>
</head>
<body class="page-homepage navigation-fixed-top map-google" id="page-top" data-spy="scroll" data-target=".navigation" data-offset="90">
<?= $this->element('header'); ?>
<?= $this->fetch('content') ?>
<?= $this->element('footer'); ?>

</body>
</html>