<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Authentication[]|\Cake\Collection\CollectionInterface $authentications
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Authentication'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Services'), ['controller' => 'Services', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Service'), ['controller' => 'Services', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="authentications index large-9 medium-8 columns content">
    <h3><?= __('Authentications') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('service_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expiration') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($authentications as $authentication): ?>
            <tr>
                <td><?= h($authentication->id) ?></td>
                <td><?= $authentication->has('user') ? $this->Html->link($authentication->user->name, ['controller' => 'Users', 'action' => 'view', $authentication->user->id]) : '' ?></td>
                <td><?= $authentication->has('service') ? $this->Html->link($authentication->service->name, ['controller' => 'Services', 'action' => 'view', $authentication->service->id]) : '' ?></td>
                <td><?= h($authentication->token) ?></td>
                <td><?= h($authentication->expiration) ?></td>
                <td><?= $this->Number->format($authentication->status) ?></td>
                <td><?= h($authentication->created) ?></td>
                <td><?= h($authentication->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $authentication->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $authentication->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $authentication->id], ['confirm' => __('Are you sure you want to delete # {0}?', $authentication->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
