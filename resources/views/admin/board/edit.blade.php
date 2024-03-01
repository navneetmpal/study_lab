@extends('layout.admin.app')
@section('content')
<div class="container">
    <div class="card">
        <h2>Update boards</h2>
        <form method="POST" autocomplete="off" action= "{{ route('boardsupdate', $boards->id) }}" name="boardsForm" id="boardsForm" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="boards"> boards:</label>
                <input type="text" id="boards" name="boards" value="{{$boards->board}}" placeholder="Update school boards" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
        <a href="{{route('boards.index')}}"><button class="right-button">Back</button></a>
</div> 
@include('sweetalert::alert')





@endsection

