<div class="card">
    <div class="header">
        <h1>List templates</h1>
    </div>
    <div class="body">
        <div class="float-right m-b-20">
        <a href="<?=$this->url?>templates/add" class="btn btn-success" title="Edit">Add template</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover m-b-0 c_list">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?foreach($templates as $template):?>
                        <tr>
                            <td>
                                <?=$template['id']?>
                            </td>
                            <td>
                                <?=$template['name']?>
                            </td>
                            <td>                                            
                                <a href="<?=$this->url?>templates/edit/<?=$template['id']?>" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="<?=$this->url?>templates/delete/<?=$template['id']?>" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    <?endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>