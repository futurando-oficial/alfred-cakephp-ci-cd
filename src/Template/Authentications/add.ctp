<div class="row justify-content-center">
    <?php foreach ($services as $service): ?>
        <div class="col-md-2">
            <div class="card text-center" >
                <?= $this->Html->image('services/' . $service->logo, ['class' => 'card-img-top']) ?>
                <div class="card-body">
                    <p class="card-text">Conect your <?= $service->name ?> account.</p>
                    <a href="#0" class="btn btn-primary">Login</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
