<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title"><?= h($user->name) ?></h4>
                <p class="card-category"></p>
            </div>
            <div class="card-body">
                <table class="vertical-table table">
                                                                                                        <tr>
                                    <th scope="row"><?= __('Id') ?></th>
                                    <td><?= h($user->id) ?></td>
                                </tr>
                                                                                                                <tr>
                                    <th scope="row"><?= __('Name') ?></th>
                                    <td><?= h($user->name) ?></td>
                                </tr>
                                                                                                                <tr>
                                    <th scope="row"><?= __('Username') ?></th>
                                    <td><?= h($user->username) ?></td>
                                </tr>
                                                                                                                <tr>
                                    <th scope="row"><?= __('Password') ?></th>
                                    <td><?= h($user->password) ?></td>
                                </tr>
                                                                                                                                                                                        <tr>
                                <th scope="row"><?= __('Created') ?></th>
                                <td><?= h($user->created) ?></td>
                            </tr>
                                                    <tr>
                                <th scope="row"><?= __('Modified') ?></th>
                                <td><?= h($user->modified) ?></td>
                            </tr>
                                                                                </table>
                                                            </div>
        </div>
    </div>
</div>
