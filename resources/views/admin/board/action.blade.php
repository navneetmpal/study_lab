<div class="action-product">
<span class="table-icon">
    <a href="{{route('boards.edit', $id)}}" onclick="">
        <i class="fa fa-pencil text-primary font-size-18" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Edit" data-confirm-delete="true"></i>
    </a>
</span> 
<span class="table-icon">
    <a href="{{route('boardsdestroy', $id)}}" onclick="return confirm('Are you sure?')">
        <i class="fa fa-trash text-danger font-size-18" aria-hidden="true" data-toggle="tooltip" data-placement="bottom" title="Delete"></i>
    </a>
</span>

</div>

