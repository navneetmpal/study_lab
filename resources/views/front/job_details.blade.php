@extends('layout.front.app')
@section('content')
<div id="sub_banner" class="gradient">
    <div class="container">
        <div class="sub_banner">
            <h1>Job Details</h1>
            <div class="breadcumb">
                <ul>
                    <li><a href="#" title="Home">Home</a></li>
                    <li><a href="#" title="Teacher Resources">Teacher Resources</a></li>                            
                    <li>Job Vacancy</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div id="content">
    <div class="detail_page">
        <div class="container">
            <div class="back"><a href="#" title="Back to Job Listing">Back to Job Listing</a></div>
            <div class="apply clearfix">
                <div class="img"><img src="{{asset('asset/images/teacher_job_1.png')}}" alt="AIS - Ahmedabad International School"></div>
                <div class="img_detail">{{$jobdetails->school_name}}</div>
                <div class="apply_btn"><a href="{{route('job_apply_form', ['id'=>$jobdetails->id])}}" title="Apply for Job">Apply for Job</a></div>
            </div>
            <div class="row clearfix">
                <div class="left">
                    <div class="box">
                        <div class="school_detail_carousel owl-carousel owl-theme">
                            <div class="item"><a data-fancybox="photogallery" href="images/school_1.jpg" title=""><img src="{{asset('asset/images/school_1.jpg')}}" alt="dggtr"></a></div>
                            <div class="item"><a data-fancybox="photogallery" href="images/school_1.jpg" title=""><img src="{{asset('asset/images/school_1.jpg')}}" alt=""></a></div>
                            <div class="item"><a data-fancybox="photogallery" href="images/school_1.jpg" title=""><img src="{{asset('asset/images/school_1.jpg')}}" alt=""></a></div>
                            <div class="item"><a data-fancybox="photogallery" href="images/school_1.jpg" title=""><img src="{{asset('asset/images/school_1.jpg')}}" alt=""></a></div>
                        </div>
                    </div>                            
                </div>
                <div class="right">
                    <div class="box">
                        <div class="icon_boxes job">
                            <div class="icon_box">
                                <p><span><img src="{{asset('asset/images/icon1.png')}}" alt=""></span><strong>Board :  </strong>{{$jobdetails->board}}</p>
                            </div>
                            <div class="icon_box">
                                <p><span><img src="{{asset('asset/images/icon2.png')}}" alt=""></span><strong>Grades :  </strong>Grades {{$jobdetails->grade}}</p>
                            </div>
                            <div class="icon_box">
                                <p><span><img src="{{asset('asset/images/icon3.png')}}" alt=""></span><strong>Medium :  </strong>{{$jobdetails->medium}}</p>
                            </div>
                            <div class="icon_box">
                                <p><span><img src="{{asset('asset/images/icon6.png')}}" alt=""></span><strong>Location :  </strong>{{$jobdetails->address}}</p>
                            </div>                                    
                        </div>
                    </div>                                                        
                </div>
            </div>
            <div class="row">
                <div class="job_title"><strong>Job Title :</strong> {{$jobdetails->sub_name}} Teacher</div>
            </div>
            <div class="row">
                <div class="box">
                    <div class="about">
                        <p><strong>Subject  : </strong> {{$jobdetails->sub_name}} <br>
                        <strong>Grade     : </strong>  1, 2, 3, 4<br>
                        <strong>Board     : </strong> {{$jobdetails->board}} <br>
                        <strong>Medium : </strong> {{$jobdetails->medium}} </p>                            
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="box">
                    <div class="about">
                        <p><span>Job Type</span>Regular / Permanent</p>
                        <p><span>Salary</span>Rs. 25,500 - Rs. 30,00 monthly</p>
                        <hr>
                        <h4>Job Details</h4>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul>
                            <li>Must have B.ED. Degree</li>
                            <li>Having good knowledge in Teaching of 6 - 9 Grades</li>
                            <li>Can make Planner, Exam Papers & Co-ordinate with seniors to get it done.</li>
                            <li>Minimum 3 years of experience in teaching.</li>
                            <li>Can handle the class independently</li>
                            <li>We are hiring TGT Maths / Schence & English</li>
                            <li>We are hiring TGT Maths / Schence & English</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="box">
                    <div class="about">
                        <h3>Perks & Benefits for Teachers</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul>
                            <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
                            <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="box">
                    <div class="about">
                        <h3>About School</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <ul>
                            <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
                            <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</li>
                        </ul>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="two_btn">
                    <a href="{{route('job_apply_form', ['id'=>$jobdetails->id])}}" title="Apply for Job">Apply for Job</a>                            
                </div>
                <div class="two_btn">  
                    @if (Auth::user()->type=='0')
                        <a href="{{ route('student') }}">Back</a>
                    @else(Auth::user()->type=='1')
                        <a href="{{ route('teacher') }}">Back</a>
                    @endif                         
                </div>
            </div>
        </div>
    </div>
    <div class="teacher_job">
        <div class="container">
            <h2>More Jobs at AIS</h2>
            <div class="swiper swiper_teacher">
                <div class="swiper-nav">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="teacher_box clearfix">
                            <div class="img">
                                <img src="{{asset('asset/images/teacher_job_1.png')}}" alt="">                                        
                            </div>
                            <div class="img_detail">
                                <h3>AIS - Ahmedabad International School</h3>
                                <div class="text">
                                    <p><span>Subjects</span>Maths</p>
                                    <p><span>Grade</span>1, 2, 3, 4</p>
                                    <p><span>Board</span>IB</p>
                                    <p><span>Medium</span>English</p>
                                    <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                </div>
                                <div class="view_job_details"><a href="#" title="View Job Details">View Job Details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="teacher_box clearfix">
                            <div class="img">
                                <img src="{{asset('asset/images/teacher_job_1.png')}}" alt="">                                        
                            </div>
                            <div class="img_detail">
                                <h3>AIS - Ahmedabad International School</h3>
                                <div class="text">
                                    <p><span>Subjects</span>Maths</p>
                                    <p><span>Grade</span>1, 2, 3, 4</p>
                                    <p><span>Board</span>IB</p>
                                    <p><span>Medium</span>English</p>
                                    <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                </div>
                                <div class="view_job_details"><a href="#" title="View Job Details">View Job Details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="teacher_box clearfix">
                            <div class="img">
                                <img src="images/teacher_job_1.png" alt="">                                        
                            </div>
                            <div class="img_detail">
                                <h3>AIS - Ahmedabad International School</h3>
                                <div class="text">
                                    <p><span>Subjects</span>Maths</p>
                                    <p><span>Grade</span>1, 2, 3, 4</p>
                                    <p><span>Board</span>IB</p>
                                    <p><span>Medium</span>English</p>
                                    <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                </div>
                                <div class="view_job_details"><a href="#" title="View Job Details">View Job Details</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="teacher_box clearfix">
                            <div class="img">
                                <img src="images/teacher_job_1.png" alt="">                                        
                            </div>
                            <div class="img_detail">
                                <h3>AIS - Ahmedabad International School</h3>
                                <div class="text">
                                    <p><span>Subjects</span>Maths</p>
                                    <p><span>Grade</span>1, 2, 3, 4</p>
                                    <p><span>Board</span>IB</p>
                                    <p><span>Medium</span>English</p>
                                    <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                </div>
                                <div class="view_job_details"><a href="#" title="View Job Details">View Job Details</a></div>
                            </div>
                        </div>
                    </div>
                </div>                        
            </div>                    
        </div>
    </div>
</div>


@section('js')
<script type="text/javascript" src="{{ asset('asset/js/customjs/job_details.js') }}"></script>
<script src="{{asset('asset/js/owl_carousel.js')}}"></script>
@endsection
@endsection
