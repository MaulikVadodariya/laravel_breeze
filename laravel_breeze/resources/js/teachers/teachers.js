$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var table = $('#teachersDatatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: teachersIndexUrl,
        columns: [
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {
                data: function (row) {
                    let url = teachersIndexUrl + row.id;
                    let editURL = url+ '/edit';

                    return `<a title="View"
                   class="btn btn-danger action-btn" data-id="${row.id}"
                     href="${url}">
                    <i class="fa fa-eye"></i>
                </a>
                <a title="Edit"
                          class="btn btn-warning action-btn"
                           href="${route('teachers.edit' , row.id)}">
                    <i class="fa fa-edit"></i>
                </a>
                <a title="Delete"
                   class="btn btn-danger teacher-delete-btn" data-id="${row.id}"
                     href="javascript:void(0)">
                    <i class="fa fa-trash"></i>
                </a>`
                }, 
                name: 'id'}
        ]
    });

$(document).on('click','.teacher-delete-btn' , function (event){
    let deleteId = $(event.currentTarget).data('id')
    $.ajax({
        'method':'DELETE',
        'url':teachersIndexUrl + '/' + deleteId,
        'dataType': 'json',
        success:function (result){
            if(result.success == "true"){
                $('#teachersDatatable').DataTable().ajax.reload();
            }else{
                alert('Teacher not found');
            }
        }
    })
})

