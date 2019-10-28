<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project $project
 */
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"> <?= __('Add Project') ?></h4>
                <p class="card-category"></p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <?= $this->Form->create($project, ['templates' => 'painel_formtemplate']) ?>
                        <?php
                        echo $this->Form->control('name');
                        echo $this->Form->control('source',['options'=>['Github','Bitbucket','Gitlab']]);
                        ?>
                        <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>