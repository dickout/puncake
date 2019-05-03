<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>Edit option</h2>
            </div>
            <div class="body">
                <?= $this->Form->create(null, [ 'class' => 'form-auth-small' ]) ?>
                <div class="form-group">
                    <select name="type" class="form-control">
                        <option>Choose type</option>
                        <option value="page">page</option>
                    </select>
                </div>
                <div class="form-group">
                    <?= $this->Form->control('name', ['class' => 'form-control', 'label' => 'Option name', 'value' => $option['name']]) ?>
                </div> 
                <div class="form-group">
                    <?= $this->Form->control('value', ['class' => 'form-control', 'label' => 'Option value', 'value' => $option['value']]) ?>
                </div> 
                <div class="form-group">
                    <?= $this->Form->control('extra', ['class' => 'form-control', 'label' => 'Enter extra data', 'value' => $option['extra']]) ?>
                </div> 
                <?= $this->Form->button('Publish', ['class' => 'btn btn-primary btn-lg btn-block']); ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>