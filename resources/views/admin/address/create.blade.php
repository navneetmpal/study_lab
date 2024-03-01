@extends('layout.admin.app')
@section('content')
<div class="container">
    <div class="card">
        <h2>Add Address</h2>
        <form method="POST" autocomplete="off" name="addressForm" id="addressForm" action="{{route('address.store')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="address">Address:<span class="error"></span></label>
                <input type="text" id="address" name="address" placeholder="Add new school address">
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
        <a href="{{route('address.index')}}"><button class="right-button">Back</button></a>
</div> 


@section('adminjs')
<script type="text/javascript" src="{{asset('adminjs/address.js')}}"></script>
@endsection



@endsection

