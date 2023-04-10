<div id="login-page">
    <div class="container">
        <?php echo $this->Form->create($user, ['type' => 'post', 'class' => "form-login"]); ?>
            <h2 class="form-login-heading">Connexion</h2>
            <div class="login-wrap">
                <label for="nameInput">Votre nom</label>
                <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => "Nom d'utilisateur", 'autofocus' => true, "label" => false]) ?>
                </br>
                <label for="passwordInput">Mot de passe</label>
                <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => "Mot de Passe", "label" => false]) ?>
                </br>
                <?= $this->HTML->link('Vous n\'avez pas de compte ? Créez en un !', ['controller' => 'Users', 'action' => 'register']); ?>
                </br></br>
                <?= $this->Form->button('<i class="fa fa-lock"></i> Connexion', ['type' => 'submit', 'class' => 'btn btn-theme btn-block', 'escapeTitle' => false]); ?>
            </div>
        <?= $this->Form->end() ?>
    </div>
</div>
