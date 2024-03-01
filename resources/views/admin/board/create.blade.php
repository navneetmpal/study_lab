@extends('layout.admin.app')
@section('content')
<div class="container">
    <div class="card">
        <h2>Add Board</h2>
        <form method="POST" autocomplete="off" name="boardForm" id="boardForm" action="{{route('boards.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="board">Board:<span class="error"></span></label>
                <input type="text" id="board" name="board" placeholder="Add new school board">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
        <a href="{{route('boards.index')}}"><button class="right-button">Back</button></a>
</div> 


@section('adminjs')
<script type="text/javascript" src="{{asset('adminjs/board.js')}}"></script>
@endsection



@endsection

