<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Authentication $authentication
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $authentication->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $authentication->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Authentications'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="authentications form large-9 medium-8 columns content">
    <?= $this->Form->create($authentication) ?>
    <fieldset>
        <legend><?= __('Edit Authentication') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('service_id', ['options' => $services]);
            echo $this->Form->control('token');
            echo $this->Form->control('expiration', ['empty' => true]);
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
