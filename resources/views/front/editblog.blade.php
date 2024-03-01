@extends('layout.front.app')
@section('content')
<div id="content">
    <div class="login">
        <div class="container">
            <div class="profile">
                <div class="title"><strong>Write bolgs to</strong> connect</div>
                <div class="p_row clearfix">
                    <div class="half">
                        <form method="POST" autocomplete="off" name="blogForm" id="blogForm" action="{{route('updateblog',['id'=>$blogcontent->id])}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                            </div>
                            <div class="row clearfix">
                                <div class="part">
                                    <!-- <label for="address">Click,if you want to delete this image</label> -->
                                    <!-- <a href="#"> -->
                                        <img src="{{ asset($blogcontent->image) }}" alt="Blog Image">
                                    <!-- </a> -->
                                    <label for="address">Upload new image</label>
                                    <div class="custom-file-upload">
                                        <input type="file" class="input_file" name="image" id="address">
                                        <span class="custom-placeholder">Upload image...</span>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="row clearfix">
                                    <label>Tell us about you *</label>
                                    <input type="text" class="mytextarea" id="mytextarea" name="blog" rows="3" cols="50" value="{{$blogcontent->blog}}" >
                                    <span class="error" style="color:red;font-weight: bold;"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="submit">
                                    <button type="submit" class="btn" id="submit">
                                        <span>Update</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="row">
                            <div class="submit">
                                <a href="{{route('deleteblog',['id'=>$blogcontent->id])}}">
                                    <button type="submit" class="btn" id="submit">
                                        <span>Delete</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="submit">
                                    <button type="submit" class="btn" id="submit">
                                        <span>
                                            @if (Auth::user()->type=='0')
                                                <a href="{{ route('student') }}">Back</a>
                                            @else(Auth::user()->type=='1')
                                                <a href="{{ route('teacher') }}">Back</a>
                                            @endif
                                        </span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>                        
            </div>        
        </div>
    </div>            
</div>
@section('js')
<script type="text/javascript" src="{{ asset('asset/js/customjs/school_admission_form.js') }}"></script>
@endsection
@endsection
