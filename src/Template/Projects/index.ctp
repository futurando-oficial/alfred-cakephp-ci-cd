<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project[]|\Cake\Collection\CollectionInterface $projects
 */
?>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"><?= __('Projects') ?></h4>
                <p class="card-category"></p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <table cellpadding="0" cellspacing="0" class="table">
                            <thead>
                                <tr>
                                                                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                                                            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                                                                            <th scope="col"><?= $this->Paginator->sort('source') ?></th>
                                                                            <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                                                                            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                                                            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                                                            <th scope="col"><?= $this->Paginator->sort('last_update') ?></th>
                                                                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($projects as $project): ?>
                                <tr>
                                                                                                                                                                                                                                                                                                    <td><?= h($project->id) ?></td>
                                                                                                                                                                                                                                                                                                                                                                                        <td><?= h($project->name) ?></td>
                                                                                                                                                                                                                                                                                                                                                                                        <td><?= h($project->source) ?></td>
                                                                                                                                                                                                                                                                                                                                                                                        <td><?= $this->Number->format($project->status) ?></td>
                                                                                                                                                                                                                                                                                                                                                                                        <td><?= h($project->created) ?></td>
                                                                                                                                                                                                                                                                                                                                                                                        <td><?= h($project->modified) ?></td>
                                                                                                                                                                                                                                                                                                                                                                                        <td><?= h($project->last_update) ?></td>
                                                                                                                                                                                                <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
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
