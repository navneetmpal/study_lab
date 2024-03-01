@extends('layout.front.app')
@section('content')
<div id="content">
    <div class="login">
        <div class="container">
            <div class="profile">
                <div class="title"><strong>Welcome To</strong> {{$details->name}}</div>
                <div class="p_row clearfix">
                    <div class="half">
                        <div class="caption clearfix">
                            <h3>Fill the Following from to make query</h3>
                            <a href="#" title="Edit"></a>
                        </div>
                        <!-- <img src="{{asset('asset/images/teacher_job_1.png')}}"> -->
                        <!-- <div class="caption clearfix">
                            <h3>Change Pasword</h3>
                            <a href="#" title="Edit">[ Edit ]</a>
                        </div> -->
                        <div class="row clearfix relative">
                            <!-- <label>Old Password *</label>
                            <input type="text" class="input_text" placeholder="">
                            <div class="view_password"><a href="#" title=""></a></div> -->
                            <img src="{{asset('asset/images/teacher_job_1.png')}}" style="height:450px;">
                        </div>
                        <!-- <div class="row clearfix relative">
                            <label>New Password *</label>
                            <input type="text" class="input_text" placeholder="">
                            <div class="view_password"><a href="#" title=""></a></div>
                        </div> -->
                        <!-- <div class="row clearfix relative">
                            <label>Confirm New Password *</label>
                            <input type="text" class="input_text" placeholder="">
                            <div class="view_password"><a href="#" title=""></a></div>
                        </div> -->
                        <!-- <div class="row">
                            <div class="submit">
                                <input type="submit" class="btn" value="Change pASSWORD">
                            </div>
                        </div> -->
                    </div>
                    <div class="half">
                        <form method="POST" autocomplete="off" name="admissionForm" id="admissionForm" action="{{ route('store', ['id' => $details->id]) }}" enctype="multipart/form-data">
                            @csrf                       
                            <div class="row clearfix">
                                <div class="part">
                                    <label>Student Full Name *</label>
                                    <input type="text" class="input_text" name="name" id="name" autofocus required>
                                </div>
                                <div class="part">
                                    <label>Father's Full Name *</label>
                                    <input type="text" class="input_text"name="fathername" id="fathername">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="part">
                                    <label>Mother's Full Name *</label>
                                    <input type="text" class="input_text" name="mothername" id="mothername">
                                </div>
                                <div class="part">
                                    <label>Class No. *</label>
                                    <input type="text" class="input_text" name="class" id="class">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="part">
                                    <label>Contact No. *</label>
                                    <input type="text" class="input_text" name="contact" id="contact">
                                </div>
                                <div class="part">
                                    <label>Address</label>
                                    <input type="text" class="input_text" name="address" id="address">
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="part">
                                    <label>Upload. *</label>
                                    <input type="text" class="input_text" name="contact" id="contact">
                                </div>
                                <div class="part">
    <label for="address">Upload</label>
    <div class="custom-file-upload">
        <input type="file" class="input_file" name="address" id="address">
        <span class="custom-placeholder">Upload image...</span>
    </div>
</div>
</div>
                            <!-- <div class="row clearfix">
                                <div class="part">
                                    <label>City *</label>
                                    <input type="text" class="input_text" name="city" id="city">
                                </div>
                                <div class="part">
                                    <label>Zip / Postal *</label>
                                    <input type="text" class="input_text" name="zip" id="zip">
                                </div>
                            </div> -->
                            <!-- <div class="row clearfix">
                                <div class="part">
                                    <label>State *</label>
                                    <input type="text" class="input_text" name="state" id="state">
                                </div>
                                <div class="part">
                                    <label>Country *</label>
                                    <input type="text" class="input_text" name="country" id="country">
                                </div>
                            </div> -->
                            <div class="box">
                                <div class="row clearfix">
                                    <label>Tell us about you *</label>
                                    <textarea type="text" class="mytextarea" id="mytextarea" name="mytextarea" rows="3" cols="50" required ></textarea>
                                    <span class="error" style="color:red;font-weight: bold;"></span>
                                </div>
                            </div>
                            <!-- <div class="box">
                                <div class="row clearfix">
                                    <label>Tell us about you *</label>
                                    <textarea type="text" class="mytextarea" id="secound" name="mytextareatwo" rows="5" cols="50"></textarea>
                                    <span class="error" style="color: red;font-weight: bold;"></span>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="submit">
                                    <button type="submit" class="btn" id="submit">
                                        <span">Submit</span>
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
<!-- <div class="xyz" style="margin-top: 50px;">
    <form method="post">
        <textarea id="mytextarea">Hello, World!</textarea>
    </form>
</div> -->


@section('js')
<script type="text/javascript" src="{{ asset('asset/js/customjs/school_admission_form.js') }}"></script>
@endsection
@endsection
