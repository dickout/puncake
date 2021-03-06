<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Edit template</h2>
            </div>
            <div class="body">
                <?= $this->Form->create(null, [ 'class' => 'form-auth-small' ]) ?>
                <div class="form-group">
                    <?= $this->Form->control('name', ['class' => 'form-control', 'label' => 'Template title', 'value' => $template['name']]) ?>
                </div> 
                <textarea name="body" id="ckeditor"><?=$template['body']?></textarea>
                <?= $this->Form->button('Publish', ['class' => 'btn btn-primary btn-lg btn-block']); ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>