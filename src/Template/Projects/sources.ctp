<?php if (!empty($user->authentications)) : ?>
    <div class="row justify-content-center">
        <?php foreach ($user->authentications as $authentication) : ?>
            <div class="col-md-3">
                <div class="card text-center">
                    <?= $this->Html->image('services/' . $authentication->service->logo, ['class' => 'card-img-top']) ?>
                    <div class="card-body">
                        <p class="card-text">Project from the <?= $authentication->service->name ?> account.</p>
                        <a href="<?= $this->Url->build(['action' => 'repositories', $authentication->id]) ?>" class="btn btn-primary">Next</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php else : ?>
    <div class="row">
        <div class="col-12 text-center">
            <h2>Add new Authentication</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <a href="<?= $this->Url->build(['controller' => 'Authentications', 'action' => 'add']); ?>" class="btn btn-primary">Auth</a>
        </div>
    </div>
<?php endif; ?>