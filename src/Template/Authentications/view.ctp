<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Authentication $authentication
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Authentication'), ['action' => 'edit', $authentication->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Authentication'), ['action' => 'delete', $authentication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authentication->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Authentications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Authentication'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="authentications view large-9 medium-8 columns content">
    <h3><?= h($authentication->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($authentication->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $authentication->has('user') ? $this->Html->link($authentication->user->name, ['controller' => 'Users', 'action' => 'view', $authentication->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Token') ?></th>
            <td><?= h($authentication->token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Service') ?></th>
            <td><?= $this->Number->format($authentication->service) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($authentication->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expiration') ?></th>
            <td><?= h($authentication->expiration) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($authentication->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($authentication->modified) ?></td>
        </tr>
    </table>
</div>
