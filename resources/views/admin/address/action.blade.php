<div class="action-product">
<span class="table-icon">
    <a href="{{route('address.edit', $id)}}" onclick="">
        <i class="fa fa-pencil text-primary font-size-18" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Edit" data-confirm-delete="true"></i>
    </a>
</span> 
<span class="table-icon">
    <a href="#" onclick="addressdestroy({{ $id }})";>
        <i class="fa fa-trash text-danger font-size-18" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Delete"></i>
    </a>
    <!-- <a href="{{route('addressdestroy', $id)}}" data-confirm-delete="true" onclick="return confirm('r u sure?')">
        <i class="fa fa-trash text-danger font-size-18" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Delete"></i>
    </a> -->
</span>

</div>
<script type="text/javascript">
//     function addressdestroy(id) {
//     Swal({
//         title: 'Are you sure?',
//         text: 'You won\'t be able to revert this!',
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: 'Yes, delete it!'
//     }).then((result) => {
//         if (result.isConfirmed) {
//             // If confirmed, redirect to the delete URL
//             window.location.href = url;
//         }
//     });
// }
// ---------------------
function addressdestroy(id){
    swal({
        width: 350,
        height: 250,
        title: "Product Delete",
        text: "Are you sure want to delete this Product ?",
        buttons: {
        cancel: "No",
        confirm: "Yes",
        },
    }).then(function (isConfirm) {
        if (isConfirm) {
        $.ajax({
            url:site_path + "/addressdestroy/"+id,
            method:"POST",
            data: {"_token": $('meta[name="csrf-token"]').attr('content'),
            "id":id,
                },
            beforeSend: function() {},
            success: function(response) {
               swal({
                title: response,
                width: '350px',
                confirmButtonColor: '#091C77'
                });
                 $('.table').DataTable().ajax.reload(null, false);    
            },
            error: function(xhr, status, error) {}
            });
    }
    }, function (dismiss) {
        return false;
    })
}
</script>

