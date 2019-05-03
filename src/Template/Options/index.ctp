<div class="card">
    <div class="header">
        <h1>List options</h1>
    </div>
    <div class="body">
        <div class="float-right m-b-20">
        <a href="<?=$this->url?>options/add" class="btn btn-success" title="Edit">Add option</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover m-b-0 c_list">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Value</th>
                        <th>Type</th>
                        <th>Extra</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?foreach($options as $option):?>
                        <tr>
                            <td>
                                <?=$option['id']?>
                            </td>
                            <td>
                                <?=$option['name']?>
                            </td>
                            <td>
                                <?=$option['value']?>
                            </td>
                            <td>
                                <?=$option['type']?>
                            </td>
                            <td>
                                <?=$option['extra']?>
                            </td>
                            <td>                                            
                                <a href="<?=$this->url?>options/edit/<?=$option['id']?>" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="<?=$this->url?>options/delete/<?=$option['id']?>" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    <?endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>