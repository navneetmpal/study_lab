@extends('layout.front.app')
@section('content')
<div id="content">
    <div class="login">
        <div class="container">
            <div class="profile">
                <div class="title"><strong>Write bolgs to</strong> connect</div>
                <div class="p_row clearfix">
                    <div class="half">
                        <div class="row clearfix">
                            <div class="part">
                                <div class="custom-file-upload">
                                    <img src="{{ asset($blogcontent->image) }}" alt="Blog Image">
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="row clearfix">
                                <h1>Content</h1>
                                <h3>{!! $blogcontent->blog !!}</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="submit">
                                @if (Auth::user()->type=='0')
                                    <a href="{{ route('student') }}">
                                        <button type="submit" class="btn" id="submit">
                                            <span>Back</span>
                                        </button>        
                                    </a>
                                @else(Auth::user()->type=='1')
                                    <a href="{{ route('teacher') }}">
                                        <button type="submit" class="btn" id="submit">
                                            <span>Back</span>
                                        </button>
                                    </a>
                                @endif
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
