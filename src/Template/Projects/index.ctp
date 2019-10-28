<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Project[]|\Cake\Collection\CollectionInterface $projects
 */
?>
<div class="row">
    <div class="col-6">
        <h2>Projects</h2>
    </div>
    <div class="col-6 text-right">
        <a href="<?= $this->Url->build(['controller'=>'Projects','action'=>'add']) ?>" class="btn btn-primary">New Project</a>
    </div>
</div>
<div class="row">
    <?php foreach ($projects as $project) : ?>
        <div class="col-md-4">
            <div class="card <?= $project->source ?>">
                <div class="card-header card-header-rose">
                    <h4 class="card-title"><?= h($project->name) ?></h4>
                </div>
                <div class="card-body">
                    Status : <?= $project->status  ?> <br />
                    Last Updated : <?= $project->last_update ?> <br />
                    <div class="row">
                        <div class="col-6">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?>
                        </div>
                        <div class="col-6">
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
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