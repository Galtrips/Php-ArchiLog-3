<header class="header black-bg">
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <a href="/" class="logo"><b>AD<span>MIN</span></b></a>
    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            <li>
                <?php echo $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout'], ['class' => "logout"]);?>
            </li>
        </ul>
    </div>
</header>