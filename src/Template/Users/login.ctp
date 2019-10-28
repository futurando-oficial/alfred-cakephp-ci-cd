<?php
$this->layout = false;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <?= $this->Html->charset() ?>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Alfred CI/CD
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <?= $this->fetch('meta') ?>
    <?= $this->Html->meta('icon') ?>

    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- Material Kit CSS -->
    <?= $this->Html->css('material-dashboard.css?v=2.1.1'); ?>

    <?= $this->fetch('css') ?>
</head>

<body class="login-page sidebar-mini">
    <div>
        <div class="full-page login-page section-image align-middle" filter-color="black" style="margin-top: 8%;">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 ml-auto mr-auto">
                            <div class="card" style="border-radius: 0;">
                                <div class="card-header ">
                                    <div class="row justify-content-center" style="margin: 20px;">
                                        Alfred CI/CD
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="row justify-content-center">
                                        <div class="col-12 text-center">
                                            <?= $this->Flash->render() ?>
                                        </div>
                                    </div>
                                    <?= $this->Form->create(null, ['templates' => 'painel_formtemplate']) ?>
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-lg-8">
                                            <?= $this->Form->control('username') ?>
                                        </div>

                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-lg-8">
                                            <?= $this->Form->control('password') ?>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-12 col-lg-8 text-center">
                                            <?= $this->Form->button(__('Login'), ['class' => 'btn btn-primary btn-md', 'style' => "width: 213px;margin-top: 61px;margin-bottom: 62px;"]); ?>
                                        </div>
                                    </div>
                                    <?= $this->Form->end() ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--   Core JS Files   -->
    <?= $this->Html->script('core/jquery.min.js'); ?>
    <?= $this->Html->script('core/popper.min.js'); ?>
    <?= $this->Html->script('core/bootstrap-material-design.min.js'); ?>
    <?= $this->Html->script('plugins/perfect-scrollbar.jquery.min.js'); ?>
    <?= $this->Html->script('material-dashboard.js?v=2.1.1'); ?>

    <?= $this->fetch('script') ?>
</body>

</html>