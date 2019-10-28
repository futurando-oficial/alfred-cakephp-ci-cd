<div class="row justify-content-center">
    <?php foreach ($services as $service): ?>
        <div class="col-md-2">
            <div class="card text-center" >
                <?= $this->Html->image('services/' . $service->logo, ['class' => 'card-img-top']) ?>
                <div class="card-body">
                    <p class="card-text">Conect your <?= $service->name ?> account.</p>
                    <?php if ($service->status == 1): ?>
                        <a href="<?= $servicesUrl[$service->module] ?>" class="btn btn-primary">Login</a>
                    <?php else: ?>
                        <a href="#0" class="btn btn-default disabled">coming soon</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
