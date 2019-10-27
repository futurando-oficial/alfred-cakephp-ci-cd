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
                <h4 class="card-title"><?= h($project->name) ?></h4>
                <p class="card-category"></p>
            </div>
            <div class="card-body">
                <table class="vertical-table table">
                                                                                                        <tr>
                                    <th scope="row"><?= __('Id') ?></th>
                                    <td><?= h($project->id) ?></td>
                                </tr>
                                                                                                                <tr>
                                    <th scope="row"><?= __('Name') ?></th>
                                    <td><?= h($project->name) ?></td>
                                </tr>
                                                                                                                <tr>
                                    <th scope="row"><?= __('Source') ?></th>
                                    <td><?= h($project->source) ?></td>
                                </tr>
                                                                                                                                                                    <tr>
                                <th scope="row"><?= __('Status') ?></th>
                                <td><?= $this->Number->format($project->status) ?></td>
                            </tr>
                                                                                                                    <tr>
                                <th scope="row"><?= __('Created') ?></th>
                                <td><?= h($project->created) ?></td>
                            </tr>
                                                    <tr>
                                <th scope="row"><?= __('Modified') ?></th>
                                <td><?= h($project->modified) ?></td>
                            </tr>
                                                    <tr>
                                <th scope="row"><?= __('Last Update') ?></th>
                                <td><?= h($project->last_update) ?></td>
                            </tr>
                                                                                </table>
                                                                                                            <div class="related">
                        <h4><?= __('Related Users') ?></h4>
                        <?php if (!empty($project->users)): ?>
                        <table cellpadding="0" cellspacing="0" class="table">
                            <tr>
                                                                    <th scope="col"><?= __('Id') ?></th>
                                                                    <th scope="col"><?= __('Name') ?></th>
                                                                    <th scope="col"><?= __('Username') ?></th>
                                                                    <th scope="col"><?= __('Password') ?></th>
                                                                    <th scope="col"><?= __('Created') ?></th>
                                                                    <th scope="col"><?= __('Modified') ?></th>
                                                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($project->users as $users): ?>
                            <tr>
                                                                    <td><?= h($users->id) ?></td>
                                                                    <td><?= h($users->name) ?></td>
                                                                    <td><?= h($users->username) ?></td>
                                                                    <td><?= h($users->password) ?></td>
                                                                    <td><?= h($users->created) ?></td>
                                                                    <td><?= h($users->modified) ?></td>
                                                                                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                        <?php endif; ?>
                    </div>
                            </div>
        </div>
    </div>
</div>
