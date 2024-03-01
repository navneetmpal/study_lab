@extends('layout.front.app')
@section('content')
<div id="content">
    <div class="login">
        <div class="container">
            <div class="profile">
                <div class="title" ><strong>We will get back to you, Thank you!</strong></div>
                                      
            </div>        
        </div>
    </div>                      
</div>
<!-- <div class="backindexpage"> -->
    <div class="backindexpage ">
        @if (Auth::user()->type=='0')
            <a href="{{ route('student') }}">Back</a>
        @else(Auth::user()->type=='1')
            <a href="{{ route('teacher') }}">Back</a>
        @endif
    </div>   
<!-- </div> -->

@endsection
