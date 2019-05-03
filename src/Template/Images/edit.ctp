<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Edit image</h2>
            </div>
            <div class="body">
                <?= $this->Form->create(null, [ 'class' => 'form-auth-small', 'type' => 'file' ]) ?>
                <div class="form-group">
                    <?= $this->Form->control('title', ['class' => 'form-control', 'label' => 'Image title', 'value' => $image['title'] ]) ?>
                </div> 
                <div class="form-group">
                    <div class="custom-file">
                        <input name="src" type="file" class="custom-file-input" id="file">
                        <label class="custom-file-label" for="file">Choose file</label>
                    </div>
                </div>
                <?= $this->Form->button('Publish', ['class' => 'btn btn-primary btn-lg btn-block']); ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>