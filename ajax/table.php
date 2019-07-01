<table width="50%" class="table table-striped table-hover table-bordered ">
    <thead>
    <th>ID</th>
    <th>Full Name</th>
    <th>GroupName</th>
    <th>Phone</th>
    <th width="10%">Action</th>
    </thead>
    <tbody id="table_body">
    <tr>
        <td>0</td>
        <td>Jahongir Tursunboyev</td>
        <td>951-16</td>
        <td>+336256625</td>
        <td>
            <button id="btn-danger" class="delete btn btn-danger glyphicon glyphicon-trash "></button>
            <button class="btn btn-warning glyphicon glyphicon-pencil"></button>
        </td>
    </tr>
    <tr>
        <td>0</td>
        <td>John Doe</td>
        <td>861-13</td>
        <td>+865945822</td>
        <td>
            <button onclick="deleteContact('+contacts[index].id+')"  class="btn btn-danger glyphicon glyphicon-trash "></button>
            <button class="btn btn-warning glyphicon glyphicon-pencil"></button>
        </td>
    </tr>
    </tbody>
</table>
