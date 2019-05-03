<div class="card">
    <div class="header">
        <h1>List pages</h1>
    </div>
    <div class="body">
        <div class="float-right m-b-20">
        <a href="<?=$this->url?>pages/add" class="btn btn-success" title="Edit">Add page</a>
        </div>

        <div class="table-responsive">
            <table class="table table-hover m-b-0 c_list">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Slug</th>
                        <th>Template Id</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?foreach($pages as $page):?>
                        <tr>
                            <td>
                                <?=$page['id']?>
                            </td>
                            <td>
                                <?=$page['title']?>
                            </td>
                            <td>
                                <?=$page['slug']?>
                            </td>
                            <td>
                                <?=$page['template_id']?>
                            </td>
                            <td>                                            
                                <a href="<?=$this->url?>pages/edit/<?=$page['id']?>" class="btn btn-info" title="Edit"><i class="fa fa-edit"></i></a>
                                <a href="<?=$this->url?>pages/delete/<?=$page['id']?>" class="btn btn-danger js-sweetalert" title="Delete"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    <?endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>