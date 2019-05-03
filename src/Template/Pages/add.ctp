<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Add page</h2>
            </div>
            <div class="body">
                <?= $this->Form->create(null, [ 'class' => 'form-auth-small' ]) ?>
                <div class="form-group">
                    <?= $this->Form->control('title', ['class' => 'form-control', 'label' => 'Page title']) ?>
                </div> 
                <div class="form-group">
                    <?= $this->Form->control('slug', ['class' => 'form-control', 'label' => 'Page slug']) ?>
                </div>
                <div class="form-group">
                    <select name="template_id" class="form-control">
                        <option>Choose template</option>
                        <?foreach($templates as $template):?>
                            <option value="<?=$template['id']?>"><?=$template['name']?></option>
                        <?endforeach;?>
                    </select>
                </div>
                <textarea name="body" id="ckeditor">Page content</textarea>
                <?= $this->Form->button('Publish', ['class' => 'btn btn-primary btn-lg btn-block']); ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>