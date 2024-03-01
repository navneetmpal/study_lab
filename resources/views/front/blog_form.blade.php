@extends('layout.front.app')
@section('content')
<div id="content">
    <div class="login">
        <div class="container">
            <div class="profile">
                <div class="title"><strong>Write bolgs to</strong> connect</div>
                <div class="p_row clearfix">
                    <div class="half">
                        <form method="POST" autocomplete="off" name="blogForm" id="blogForm" action="{{route('blogcontent')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row clearfix">
                            </div>
                            <div class="row clearfix">
                                <div class="part">
                                    <label for="address">Upload only one image</label>
                                    <div class="custom-file-upload">
                                        <input type="file" class="input_file" name="image" id="address">
                                        <span class="custom-placeholder">Upload image...</span>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="row clearfix">
                                    <label>Tell us about you *</label>
                                    <textarea type="text" class="mytextarea" id="mytextarea" name="blog" rows="3" cols="50" required ></textarea>
                                    <span class="error" style="color:red;font-weight: bold;"></span>
                                </div>
                            </div>
                            <div class="row">
                                <div class="submit">
                                    <button type="submit" class="btn" id="submit">
                                        <span>Submit</span>
                                    </button>
                                </div>
                            </div>
                        </form>
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
