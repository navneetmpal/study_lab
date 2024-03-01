@extends('layout.admin.app')
@section('content')
<div class="container">
    <div class="card">
        <h2>Update address</h2>
        <form method="POST" autocomplete="off" action= "{{ route('addressupdate', $address->id) }}" name="addressForm" id="addressForm" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="address"> Address:</label>
                <input type="text" id="address" name="address" value="{{$address->address}}" placeholder="Update school address" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
        <a href="{{route('address.index')}}"><button class="right-button">Back</button></a>
</div> 
@include('sweetalert::alert')





@endsection

