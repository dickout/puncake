<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Edit page</h2>
            </div>
            <div class="body">
                <?= $this->Form->create(null, [ 'class' => 'form-auth-small' ]) ?>
                <div class="form-group">
                    <?= $this->Form->control('title', ['class' => 'form-control', 'label' => 'Page title', 'value' => $page['title']]) ?>
                </div> 
                <div class="form-group">
                    <?= $this->Form->control('slug', ['class' => 'form-control', 'label' => 'Page slug', 'value' => $page['slug']]) ?>
                </div>
                <div class="form-group">
                    <select name="template_id" class="form-control">
                        <option>Choose template</option>
                        <?foreach($templates as $template):?>
                            <option value="<?=$template['id']?>" <?if($page['template_id'] == $template['id']) echo 'selected'?>><?=$template['name']?></option>
                        <?endforeach;?>
                    </select>
                </div>
                <textarea name="body" id="ckeditor"><?=$page['body']?></textarea>
                <?= $this->Form->button('Publish', ['class' => 'btn btn-primary btn-lg btn-block']); ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>