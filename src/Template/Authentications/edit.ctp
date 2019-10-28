<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Authentication $authentication
 */
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"> <?= __('Edit Authentication') ?></h4>
                <p class="card-category"></p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <?= $this->Form->create($authentication) ?>
                         <?php
                                                                    echo $this->Form->control('user_id', ['options' => $users]);
                                        echo $this->Form->control('service_id', ['options' => $services]);
                                        echo $this->Form->control('token');
                                        echo $this->Form->control('expiration', ['empty' => true]);
                                        echo $this->Form->control('status');
                        ?>
                        <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>