@extends('layout.admin.app')
@section('content')
<div class="container">
    <div class="secound-container">
        <h3 class="left-address">Boards</h3>
        <a href="{{route('boards.create')}}"><button class="right-button">Add</button></a>
    </div>
    <div>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Boards</th>
                    <th width="100px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<!-- ---------------------------------- -->
<script type="text/javascript">
    $(function () {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('boards.data') }}",
            columns: [
                    {data: 'id', name: 'id'},
                    {data: 'board', name: 'board'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
        });
    });
// --------------------------------------------------------------
</script>


@endsection

