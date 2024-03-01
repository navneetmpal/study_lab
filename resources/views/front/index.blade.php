@extends('layout.front.app')
@section('content')
<div id="banner">
    <div class="container">
        <div class="find">
            <h2>Finding <span><strong>School Admission </strong>& a <strong>Teacher Job</strong></span> <br>got easier with StudyLabz</h2>
            <div class="search">
                <div class="tab">
                    <a id="school" class="active" href="#" title="Search School">Search School</a>
                    <a id="job" href="#" title="Search Job">Search Job</a>
                </div>
                <div class="tab_detail">
                    <div class="tab_search school clearfix" style="display:block;">
                        <form action="{{ route('pick') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="box">
                            <div class="select">
                                <div class="select_check">
                                    <div class="click">
                                        <select name="address" id="address">
                                            <option value="" class="select_main">
                                                <div class="select_option">
                                                    <b>Location</b>
                                                </div>
                                            </option>
                                            <div class="click_detail">
                                                <div class="custom_scrollbar">
                                                    @foreach($address as $a)
                                                        <div class="custom_scrollbar">
                                                            <div class="click_detail">
                                                                <option value="{{ $a->address }}" class="select_row">
                                                                    <div class="select_option">
                                                                        <b>{{ $a->address }}</b>
                                                                    </div>
                                                                </option>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="select">
                                <div class="select_check">
                                    <div class="click">
                                        <select name="board" id="board">
                                            <option value="" class="select_main">
                                                <div class="select_option">
                                                    <b>Board</b>
                                                </div>
                                            </option>
                                            <div class="click_detail">
                                                <div class="custom_scrollbar">
                                                    @foreach($boards as $b)
                                                        <div class="custom_scrollbar">
                                                            <div class="click_detail">
                                                                <option value="{{ $b->board }}" class="select_row">
                                                                    <div class="select_option">
                                                                        <b>{{ $b->board }}</b>
                                                                    </div>
                                                                </option>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="select">
                                <div class="select_check">
                                    <div class="click">
                                        <select name="medium" id="medium">
                                            <option value="" class="select_main">
                                                <div class="select_option">
                                                    <b>Medium</b>
                                                </div>
                                            </option>
                                            <div class="click_detail">
                                                <div class="custom_scrollbar">
                                                    @foreach($mediums as $m)
                                                        <div class="custom_scrollbar">
                                                            <div class="click_detail">
                                                                <option value="{{ $m->medium }}" class="select_row">
                                                                    <div class="select_option">
                                                                        <b>{{ $m->medium }}</b>
                                                                    </div>
                                                                </option>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="select">
                                <div class="select_check">
                                    <div class="click">
                                        <select name="grade" id="grade">
                                            <option value="" class="select_main">
                                                <div class="select_option">
                                                    <b>Grade</b>
                                                </div>
                                            </option>
                                            <div class="click_detail">
                                                <div class="custom_scrollbar">
                                                    @foreach($grades as $m)
                                                        <div class="custom_scrollbar">
                                                            <div class="click_detail">
                                                                <option value="{{ $m->grade }}" class="select_row">
                                                                    <div class="select_option">
                                                                        <b>{{ $m->grade }}</b>
                                                                    </div>
                                                                </option>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="select">
                                <div class="select_check">
                                    <div class="click">
                                        <select name="fee" id="fee">
                                            <option value="" class="select_main">
                                                <div class="select_option">
                                                    <b>Fees</b>
                                                </div>
                                            </option>
                                            <div class="click_detail">
                                                <div class="custom_scrollbar">
                                                    @foreach($fees as $m)
                                                        <div class="custom_scrollbar">
                                                            <div class="click_detail">
                                                                <option value="{{ $m->fee }}" class="select_row">
                                                                    <div class="select_option">
                                                                        <b>{{ $m->fee }}</b>
                                                                    </div>
                                                                </option>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="search_btn">
                            <button class="submit"></button>
                        </div>
                        </form>
                    </div>
                    <div class="tab_search job clearfix">
                        <form action="{{ route('location') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="box">
                                <div class="select">
                                    <div class="select_check">
                                        <div class="click">
                                            <select name="address" id="address">
                                                <option value="" class="select_main">
                                                    <div class="select_option">
                                                        <b>Location</b>
                                                    </div>
                                                </option>
                                                <div class="click_detail">
                                                    <div class="custom_scrollbar">
                                                        @foreach($address as $a)
                                                            <div class="custom_scrollbar">
                                                                <div class="click_detail">
                                                                    <option value="{{ $a->address }}" class="select_row">
                                                                        <div class="select_option">
                                                                            <b>{{ $a->address }}</b>
                                                                        </div>
                                                                    </option>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="select">
                                    <div class="select_check">
                                        <div class="click">
                                            <select name="board" id="board">
                                                <option value="" class="select_main">
                                                    <div class="select_option">
                                                        <b>Board</b>
                                                    </div>
                                                </option>
                                                <div class="click_detail">
                                                    <div class="custom_scrollbar">
                                                        @foreach($boards as $b)
                                                            <div class="custom_scrollbar">
                                                                <div class="click_detail">
                                                                    <option value="{{ $b->board }}" class="select_row">
                                                                        <div class="select_option">
                                                                            <b>{{ $b->board }}</b>
                                                                        </div>
                                                                    </option>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="select">
                                    <div class="select_check">
                                        <div class="click">
                                            <select name="medium" id="medium">
                                                <option value="" class="select_main">
                                                    <div class="select_option">
                                                        <b>Medium</b>
                                                    </div>
                                                </option>
                                                <div class="click_detail">
                                                    <div class="custom_scrollbar">
                                                        @foreach($mediums as $m)
                                                            <div class="custom_scrollbar">
                                                                <div class="click_detail">
                                                                    <option value="{{ $m->medium }}" class="select_row">
                                                                        <div class="select_option">
                                                                            <b>{{ $m->medium }}</b>
                                                                        </div>
                                                                    </option>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="select">
                                    <div class="select_check">
                                        <div class="click">
                                            <select name="grade" id="grade">
                                                <option value="" class="select_main">
                                                    <div class="select_option">
                                                        <b>Grade</b>
                                                    </div>
                                                </option>
                                                <div class="click_detail">
                                                    <div class="custom_scrollbar">
                                                        @foreach($grades as $m)
                                                            <div class="custom_scrollbar">
                                                                <div class="click_detail">
                                                                    <option value="{{ $m->grade }}" class="select_row">
                                                                        <div class="select_option">
                                                                            <b>{{ $m->grade }}</b>
                                                                        </div>
                                                                    </option>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="select">
                                    <div class="select_check">
                                        <div class="click">
                                            <select name="subject" id="subject">
                                                <option value="" class="select_main">
                                                    <div class="select_option">
                                                        <b>subject</b>
                                                    </div>
                                                </option>
                                                <div class="click_detail">
                                                    <div class="custom_scrollbar">
                                                        @foreach($subjects as $m)
                                                            <div class="custom_scrollbar">
                                                                <div class="click_detail">
                                                                    <option value="{{ $m->subject }}" class="select_row">
                                                                        <div class="select_option">
                                                                            <b>{{ $m->subject }}</b>
                                                                        </div>
                                                                    </option>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="search_btn">
                                <button class="submit" ></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div class="schools">
            <div class="container"> 
                @if($schoolplace)
                    <h2>Schools in {{ $schoolplace->address }}</h2>
                @else
                    <h2>Schools </h2>
                @endif                
                <div class="swiper swiper_school">
                    <div class="swiper-nav">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="swiper-wrapper">
                        @if($details)
                            @foreach($details as $d)
                            <div class="swiper-slide">
                                <div class="school_box">
                                    <div class="img">
                                        <img src="{{asset('asset/images/school_1.jpg')}}" alt="">
                                        @if($d->is_admission_open=='1')
                                            <div class="admission_open">Admission open</div>
                                        @endif
                                    </div>
                                    <div class="img_detail">
                                        <div class="top">
                                            <h3>{{$d->name}}</h3>
                                            <div class="text">
                                                <p><span>Grade</span>{{$d->grade}}</p>
                                                <p><span>Board</span>{{$d->board}}</p>
                                                <p><span>Location</span>{{$d->address}}</p>
                                                <p><span>Medium</span>{{$d->medium}}</p>
                                            </div>
                                        </div>
                                        <div class="view_school_details"><a href="{{ route('school', ['id' => $d->id]) }}" title="View School Details">View School Details</a></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else($place)
                            @foreach($place as $p)
                            <div class="swiper-slide">
                                <div class="school_box">
                                    <div class="img">
                                        <img src="{{asset('asset/images/school_1.jpg')}}" alt="">
                                        @if($p->is_admission_open=='1')
                                            <div class="admission_open">Admission open</div>
                                        @endif
                                    </div>
                                    <div class="img_detail">
                                        <div class="top">
                                            <h3>{{$p->name}}</h3>
                                            <div class="text">
                                                <p><span>Grade</span>{{$p->grade}}</p>
                                                <p><span>Board</span>{{$p->board}}</p>
                                                <p><span>Location</span>{{$p->address}}</p>
                                                <p><span>Medium</span>{{$p->medium}}</p>
                                            </div>
                                        </div>
                                        <div class="view_school_details"><a href="{{ route('school', ['id' => $p->id]) }}" title="View School Details">View School Details</a></div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif                                           
                    </div>
                </div>
                <div class="view_all">
                    @if($schoolplace)
                        <a href="{{ route('viewplace', ['address' => $schoolplace->address])}}" title="View All Schools in Ahmedabad">
                            View all School in {{ $schoolplace->address }}
                        </a>
                    @else
                        <a href="{{ route('place')}}" title="View All Schools in Ahmedabad">
                            View all School
                        </a> 
                    @endif
                </div>
            </div>
    </div>
    <div class="teacher_job">
        <div class="container">
            @if($jobplace)
                <h2>Teacher’s Job Openings in {{$jobplace->address}}</h2>
            @else
                <h2>Teacher’s Job Openings</h2> 
            @endif
            <div class="swiper swiper_teacher">
                <div class="swiper-nav">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="swiper-wrapper">
                    @if($jobdata)
                        @foreach($jobdata as $jobs)
                            <div class="swiper-slide">
                                <div class="teacher_box clearfix">
                                    <div class="img">
                                        <img src="{{asset('asset/images/teacher_job_1.png')}}" alt="">
                                    </div>
                                    <div class="img_detail">
                                        <h3>{{$jobs->school_name}}</h3>
                                        <div class="text">
                                            <p><span>Subjects</span>{{$jobs->sub_name}}</p>
                                            <p><span>Grade</span>{{$jobs->grade}}</p>
                                            <p><span>Board</span>{{$jobs->board}}</p>
                                            <p><span>Medium</span>{{$jobs->medium}}</p>
                                            <p><span>Location</span>{{$jobs->address}}, Gujrat</p>
                                        </div>
                                        <div class="view_job_details"><a href="{{ route('viewjobdetail' , ['id'=>$jobs->id])}}" title="View Job Details">View Job Details</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else($jobdetails)
                        @foreach($jobdetails as $jobs)
                            <div class="swiper-slide">
                                <div class="teacher_box clearfix">
                                    <div class="img">
                                        <img src="{{asset('asset/images/teacher_job_1.png')}}" alt="">
                                    </div>
                                    <div class="img_detail">
                                        <h3>{{$jobs->school_name}}</h3>
                                        <div class="text">
                                            <p><span>Subjects</span>{{$jobs->sub_name}}</p>
                                            <p><span>Grade</span>{{$jobs->grade}}</p>
                                            <p><span>Board</span>{{$jobs->board}}</p>
                                            <p><span>Medium</span>{{$jobs->medium}}</p>
                                            <p><span>Location</span>{{$jobs->address}}, Gujrat</p>
                                        </div>
                                        <div class="view_job_details">
                                            <a href="{{ route('viewjobdetail' , ['id'=>$jobs->id])}}" title="View Job Details">
                                                View Job Details
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach 
                    @endif
                </div>                        
            </div>
            <div class="view_all">
                @if($jobplace)
                    <a href="{{route('viewjoblocation',['address'=>$jobplace->address])}}" title="View All Jobs">
                        View All Jobs in {{$jobplace->address}}
                    </a>
                @else
                    <a href="{{route('viewall')}}" title="View All Jobs">
                        View All Jobs
                    </a>
                @endif
            </div>
        </div>
    </div>
    <div class="why">
        <div class="container">
            <div class="left">
                <h2>Who are we and why us?</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <ul>
                    <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco</li>
                    <li>Duis aute irure dolor in reprehenderit in voluptate velit esse</li>
                    <li>Excepteur sint occaecat cupidatat non proident</li>
                </ul>
                <div class="about_btn"><a href="#" title="About Studylabz">About Studylabz</a></div>
            </div>
            <div class="right"><img src="{{asset('asset/images/why.png')}}" alt=""></div>
        </div>
    </div>
    <div class="testimonials">
        <div class="container">
            <h2>Testimonials</h2>
            <div class="icon"></div>
            <div class="swiper swiper_testimonial">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    <div class="swiper-slide">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    <div class="swiper-slide">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    <div class="swiper-slide">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>                            
                </div>
                <div class="swiper-nav">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                </div>                        
            </div>
        </div>
    </div>
    <div class="blog_home">
        <div class="container">
            <h2><a href="{{route('writeblogs')}}">Click here to write Our blogs</a></h2>
            <div class="swiper swiper_blog">
                <div class="swiper-nav">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="swiper-wrapper">
                    @foreach($blogcontent as $content)
                        <div class="swiper-slide">
                            <div class="blog_box">
                                <div class="img">
                                    <img src="{{ asset($content->image) }}" alt="Blog Image">
                                </div>
                                <div class="img_detail">
                                    <?php
                                    $blog = $content->blog;
                                    $words = explode(' ', $blog);
                                    $words = implode(' ', array_slice($words, 0, 15));
                                    ?>
                                    <h3>{!! $words !!}</h3>
                                    <div class="more">
                                        <a href="{{route('viewblog',['id'=>$content->id])}}" title="Read More">
                                            Read More
                                        </a>
                                        <a href="{{route('editblog',['id'=>$content->id])}}" title="Read More">
                                            Edit Blogs
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>                                                                        
            </div>
            <div class="view_all"><a href="{{route('viewallblog')}}" title="View All Blogs">View All Blogs</a></div>
        </div>
    </div>                           
</div>

<!-- <script src="{{asset('asset/js/owl_carousel.js')}}"></script> -->

<script src="{{asset('asset/js/owl_carousel.js')}}"></script>
<script src="{{asset('asset/js/fancy_scroller.js')}}"></script>
<script src="{{asset('asset/js/jquery-3.2.1.min.js')}}"></script>



@endsection
