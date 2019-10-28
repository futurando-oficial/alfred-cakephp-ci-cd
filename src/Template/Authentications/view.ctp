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
                <h4 class="card-title"><?= h($authentication->id) ?></h4>
                <p class="card-category"></p>
            </div>
            <div class="card-body">
                <table class="vertical-table table">
                                                                                                        <tr>
                                    <th scope="row"><?= __('Id') ?></th>
                                    <td><?= h($authentication->id) ?></td>
                                </tr>
                                                                                                                                                <tr>
                                    <th scope="row"><?= __('User') ?></th>
                                    <td><?= $authentication->has('user') ? $this->Html->link($authentication->user->name, ['controller' => 'Users', 'action' => 'view', $authentication->user->id]) : '' ?></td>
                                </tr>
                                                                                                                                                <tr>
                                    <th scope="row"><?= __('Service') ?></th>
                                    <td><?= $authentication->has('service') ? $this->Html->link($authentication->service->name, ['controller' => 'Services', 'action' => 'view', $authentication->service->id]) : '' ?></td>
                                </tr>
                                                                                                                <tr>
                                    <th scope="row"><?= __('Token') ?></th>
                                    <td><?= h($authentication->token) ?></td>
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
        </div>
    </div>
</div>
