<div class="vertical-align-wrap">
    <div class="vertical-align-middle auth-main">
        <div class="auth-box">
            <div class="top">
                <img src="http://www.wrraptheme.com/templates/lucid/html/assets/images/logo-white.svg" alt="Lucid">
            </div>
            <div class="card">
                <div class="header">
                    <p class="lead">Register account</p>
                </div>
                <div class="body">
                    <?= $this->Flash->render() ?>

                    <?= $this->Form->create(null, [ 'class' => 'form-auth-small' ]) ?>
                    <div class="form-group">
                        <?= $this->Form->control('username', ['class' => 'form-control', 'label' => [ 'class' => 'control-label sr-only' ]]) ?>
                    </div>
                    <div class="form-group">
                        <?= $this->Form->control('password', ['class' => 'form-control', 'label' => [ 'class' => 'control-label sr-only' ]]) ?>
                    </div>
                    <?= $this->Form->button('Register', ['class' => 'btn btn-primary btn-lg btn-block']); ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>