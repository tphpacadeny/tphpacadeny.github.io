<div class="table_control_btns">
    <a class="btn btn-xs btn-success btn_table_add" data-toggle="modal" data-target=".table_modal">ADD</a>
</div>

<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th></th>
            <th>id</th>
            <th>name</th>
            <th>info</th>
            <th></th>
        </tr>
    </thead>
    <tbody class="sortable">
        <tr db_id="1">
            <td><a class="tree_icon drop_children_btn">show</a></td>
            <td>1</td>
            <td>Mary</td>
            <td>Good woman</td>
            <td>
                <a class="btn btn-xs btn_table_edit btn_edit" data-toggle="modal" data-target=".table_modal">Edit</a>
                <a class="btn btn-xs btn_table_del btn_del">Del</a>
            </td>
        </tr>
        <tr db_id="2">
            <td><a class="tree_icon drop_children_btn">show</a></td>
            <td>2</td>
            <td>Bob</td>
            <td>Business Man</td>
            <td>
                <a class="btn btn-xs btn_table_edit btn_edit" data-toggle="modal" data-target=".table_modal">Edit</a>
                <a class="btn btn-xs btn_table_del btn_del">Del</a>
            </td>
        </tr>
    </tbody>
</table>