<!doctype html>
<html lang="pt-br">

<head>
    <title>Alfred CI/CD - <?= $this->fetch('title') ?></title>
    <!-- Required meta tags -->
    <?= $this->Html->charset() ?>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <?= $this->fetch('meta') ?>

    <?= $this->Html->meta('icon') ?>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <?= $this->Html->css('material-dashboard.css?v=2.1.1'); ?>
    <?= $this->fetch('css') ?>
</head>

<body>
    <div class="wrapper ">
        <?= $this->element('Template/sidebar'); ?>
        <div class="main-panel">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </div>
    <!--   Core JS Files   -->
    <?= $this->Html->script('core/jquery.min.js'); ?>
    <?= $this->Html->script('core/popper.min.js'); ?>
    <?= $this->Html->script('core/bootstrap-material-design.min.js'); ?>
    <?= $this->Html->script('plugins/perfect-scrollbar.jquery.min.js'); ?>
    <!-- Plugin for the momentJs  -->
    <?= $this->Html->script('plugins/moment.min.js'); ?>
    <!--  Plugin for Sweet Alert -->
    <?= $this->Html->script('plugins/sweetalert2.js'); ?>
    <!-- Forms Validations Plugin -->
    <?= $this->Html->script('plugins/jquery.validate.min.js'); ?>
    <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
    <?= $this->Html->script('plugins/jquery.bootstrap-wizard.js'); ?>
    <!-- Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
    <?= $this->Html->script('plugins/bootstrap-selectpicker.js'); ?>
    <!-- Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
    <?= $this->Html->script('plugins/bootstrap-datetimepicker.min.js'); ?>
    <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
    <?= $this->Html->script('plugins/jquery.dataTables.min.js'); ?>
    <!-- Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
    <?= $this->Html->script('plugins/bootstrap-tagsinput.js'); ?>
    <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
    <?= $this->Html->script('plugins/jasny-bootstrap.min.js'); ?>
    <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
    <?= $this->Html->script('plugins/fullcalendar.min.js'); ?>
    <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
    <?= $this->Html->script('plugins/jquery-jvectormap.js'); ?>
    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <?= $this->Html->script('plugins/nouislider.min.js'); ?>
    <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
    <!-- Library for adding dinamically elements -->
    <?= $this->Html->script('plugins/arrive.min.js'); ?>
    <!-- Chartist JS -->
    <?= $this->Html->script('plugins/chartist.min.js'); ?>
    <!--  Notifications Plugin    -->
    <?= $this->Html->script('plugins/bootstrap-notify.js'); ?>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <?= $this->Html->script('material-dashboard.js?v=2.1.1'); ?>

    <?= $this->Html->script('admin-script'); ?>
    <?= $this->fetch('script') ?>
</body>

</html>