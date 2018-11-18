<?php
use Cake\Core\Configure;
use Cake\Routing\Router;
$file = Configure::read('Theme.folder') . DS . 'src' . DS . 'Template' . DS . 'Element' . DS . 'nav-top.ctp';

if (file_exists($file)) {
    ob_start();
    include_once $file;
    echo ob_get_clean();
} else {
    ?>
    <nav class="navbar navbar-static-top">
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="hidden-xs"><?php echo $this->request->session()->read('Auth.User.nome') ?></span>
                    </a>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="<?php echo Router::url(['controller' => 'Users','action' => 'logout']); ?>" title="Sair"><i class="fa fa-sign-out"></i> Sair</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
}
?>
