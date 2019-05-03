<div class="card">
    <div class="header">
        <h1>List images</h1>
    </div>
    <div class="body">
        <div class="float-right m-b-20">
        <a href="<?=$this->url?>images/add" class="btn btn-success" title="Edit">Add image</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover m-b-0 c_list">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Src</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?foreach($images as $image):?>
                        <tr>
                            <td>
                                <?=$image['id']?>
                            </td>
                            <td>
                                <?=$image['src']?>
                            </td>
                            <td>                                            
                                <a href="<?=$this->url?>images/edit/<?=$image['id']?>" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="<?=$this->url?>images/delete/<?=$image['id']?>" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    <?endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>