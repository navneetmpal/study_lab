@extends('layout.admin.app')
@section('content')
<div class="container">
    <div class="secound-container">
        <h3 class="left-address">Address</h3>
        <a href="{{route('address.create')}}"><button class="right-button">Add</button></a>
    </div>
    <div>
        <table class="table table-bordered data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Address</th>
                    <th width="100px">Action</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@include('sweetalert::alert')


<!-- ---------------------------------- -->
<script type="text/javascript">
    $(function () {
        var table = $('.data-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('address.data') }}",
            columns: [
                    {data: 'id', name: 'id'},
                    {data: 'address', name: 'address'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ]
        });
    });
// --------------------------------------------------------------
</script>


@endsection

