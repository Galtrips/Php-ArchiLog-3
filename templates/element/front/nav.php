<aside>
    <div id="sidebar" class="nav-collapse ">
        <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered">
                <?php $linkProfil = '<img src="/img/users/' . $this->Identity->get('id') . '.jpg" class="img-circle" width="80">' ?>
                <?php echo $this->Html->link($linkProfil, ['controller' => 'Users', 'action' => 'profil'], ['escapeTitle' => false]);?>
            </p>
            <h5 class="centered">
                <?= $this->Identity->get('email')??"" ?>
            </h5>
            <li class="mt">
                <?php echo $this->Html->link('<i class="fa fa-dashboard"></i> <span>Tableau de bord</span>', ['controller' => 'Pages', 'action' => 'index'], ['escapeTitle' => false]);?>
            </li>
            <li class="mt">
                <?php echo $this->Html->link('<i class="fa fa-list"></i> <span>Les tickets</span>', ['controller' => 'Tickets', 'action' => 'listing'], ['escapeTitle' => false]);?>
            </li>
        </ul>
    </div>
</aside>