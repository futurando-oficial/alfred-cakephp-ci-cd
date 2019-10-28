<div class="sidebar" data-color="orange" data-background-color="black" data-image="<?= $this->Url->build('/img/sidebar-1.jpg') ?>">
    <div class="logo text-center">
        Alfred
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item <?= $this->request->getParam('controller') == 'Projects' ? 'active' : '' ?>">
                <a class="nav-link" href="<?= $this->Url->build(['controller' => 'projects', 'action' => 'index']) ?>">
                    <i class="material-icons">dashboard</i>
                    <p>Projects</p>
                </a>
            </li>
            <ul class="nav">
                <li class="nav-item <?= $this->request->getParam('controller') == 'Authentications' ? 'active' : '' ?>">
                    <a class="nav-link" href="<?= $this->Url->build(['controller' => 'authentications', 'action' => 'index']) ?>">
                        <i class="material-icons">dashboard</i>
                        <p>Authentications</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'logout']) ?>">
                        <i class="material-icons">exit_to_app</i>
                        <p>Sair</p>
                    </a>
                </li>
            </ul>
    </div>
</div>