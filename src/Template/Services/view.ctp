<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Service'), ['action' => 'edit', $service->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Service'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Services'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Service'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Authentications'), ['controller' => 'Authentications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Authentication'), ['controller' => 'Authentications', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="services view large-9 medium-8 columns content">
    <h3><?= h($service->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($service->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Module') ?></th>
            <td><?= h($service->module) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($service->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logo') ?></th>
            <td><?= h($service->logo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($service->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($service->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($service->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Authentications') ?></h4>
        <?php if (!empty($service->authentications)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Service Id') ?></th>
                <th scope="col"><?= __('Token') ?></th>
                <th scope="col"><?= __('Expiration') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($service->authentications as $authentications): ?>
            <tr>
                <td><?= h($authentications->id) ?></td>
                <td><?= h($authentications->user_id) ?></td>
                <td><?= h($authentications->service_id) ?></td>
                <td><?= h($authentications->token) ?></td>
                <td><?= h($authentications->expiration) ?></td>
                <td><?= h($authentications->status) ?></td>
                <td><?= h($authentications->created) ?></td>
                <td><?= h($authentications->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Authentications', 'action' => 'view', $authentications->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Authentications', 'action' => 'edit', $authentications->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Authentications', 'action' => 'delete', $authentications->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authentications->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
