<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Authentication[]|\Cake\Collection\CollectionInterface $authentications
 */
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"><?= __('Authentications') ?></h4>
                <p class="card-category"></p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table cellpadding="0" cellspacing="0" class="table">
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
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="dataTables_info" id="datatables_info" role="status" aria-live="polite"><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="dataTables_paginate paging_full_numbers" id="datatables_paginate">
                            <ul class="pagination">
                                <?= $this->Paginator->first('<< ' . __('first')) ?>
                                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                                <?= $this->Paginator->numbers() ?>
                                <?= $this->Paginator->next(__('next') . ' >') ?>
                                <?= $this->Paginator->last(__('last') . ' >>') ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
