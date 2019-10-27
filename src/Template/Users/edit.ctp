<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"> <?= __('Edit User') ?></h4>
                <p class="card-category"></p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <?= $this->Form->create($user) ?>
                         <?php
                                                                    echo $this->Form->control('name');
                                        echo $this->Form->control('username');
                                        echo $this->Form->control('password');
                        ?>
                        <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>