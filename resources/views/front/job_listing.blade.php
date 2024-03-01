@extends('layout.front.app')
@section('content')
<div id="wrap">
    <div id="sub_banner">
    	<div class="container">
        	<div class="sub_banner">
            	<h1>Teacher Resources</h1>
                <div class="breadcumb">
                	<ul>
                    	<li><a href="#" title="Home">Home</a></li>
                        <li><a href="#" title="Teacher Resources">Teacher Resources</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <!-- <div id="filter">
        	<div class="container">
            	<div class="filter">
                    <div class="box">
                        <div class="select">
                            <div class="select_check">
                                <div class="click">
                                    <a class="select_main" href="#" title="Select Course"><b>Location</b></a>
                                    <input type="hidden" name="search_1" />
                                </div>
                                <div class="click_detail">
                                    <div class="custom_scrollbar">
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Ahmedabad</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 2"><b>Gandhinagar</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 3"><b>Jamnagar</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 4"><b>Rajkot</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 5"><b>Surat</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 6"><b>Vadodara</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 7"><b>Vapi</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 8"><b>Ahmedabad</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 9"><b>Gandhinagar</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 10"><b>Jamnagar</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 11"><b>Rajkot</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 12"><b>Surat</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 13"><b>Vadodara</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 14"><b>Vapi</b></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="select">
                            <div class="select_check">
                                <div class="click">
                                    <a class="select_main" href="#" title="Select Course"><b>Board</b></a>
                                    <input type="hidden" name="search_2" />
                                </div>
                                <div class="click_detail"select_option_5>
                                    <div class="custom_scrollbar">
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>IB</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 2"><b>CBSE</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 3"><b>Jamnagar</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 4"><b>IGSCE</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 5"><b>ICSE</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 6"><b>GSEB</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 7"><b>MSBSHSE</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 8"><b>DBSE</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 9"><b>IB</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 10"><b>CBSE</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 11"><b>IGSCE</b></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="select">
                            <div class="select_check">
                                <div class="click">
                                    <a class="select_main" href="#" title="Select Course"><b>Medium</b></a>
                                    <input type="hidden" name="search_3" />
                                </div>
                                <div class="click_detail">
                                    <div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>English</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 2"><b>Gujarati</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 3"><b>Hindi</b></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="select">
                            <div class="select_check">
                                <div class="click">
                                    <a class="select_main" href="#" title="Select Course"><b>Grade</b></a>
                                    <input type="hidden" name="search_4" />
                                </div>
                                <div class="click_detail">
                                    <div class="custom_scrollbar">
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Jr. Kg.</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 2"><b>Sr. Kg.</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 3"><b>Grade 1</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 4"><b>Grade 2</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 5"><b>Grade 3</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 6"><b>Grade 4</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 7"><b>Grade 5</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 8"><b>Grade 6</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 9"><b>Grade 7</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 10"><b>Grade 8</b></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="select">
                            <div class="select_check">
                                <div class="click">
                                    <a class="select_main" href="#" title="Select Course"><b>Subject</b></a>
                                    <input type="hidden" name="search_5" />
                                </div>
                                <div class="click_detail">
                                    <div class="custom_scrollbar">
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Maths</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Science</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>English</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Physics</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Physics</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Visual Arts</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>French</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Maths</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Science</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>English</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>ICT</b></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search_btn">
                        <button class="submit"></button>
                    </div>
                </div>                
            </div>
        </div> -->
        <!-- <br> -->
        <!-- <div id="filter" class="filter_apply">
        	<div class="container">
            	<div class="filter">
                    <div class="box">
                        <div class="select">
                            <div class="select_check">
                                <div class="click">
                                    <a class="select_main" href="#" title="Select Course"><b>Location</b></a>
                                    <input type="hidden" name="search_1" />
                                </div>
                                <div class="click_detail">
                                    <div class="custom_scrollbar">
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Ahmedabad</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 2"><b>Gandhinagar</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 3"><b>Jamnagar</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 4"><b>Rajkot</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 5"><b>Surat</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 6"><b>Vadodara</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 7"><b>Vapi</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 8"><b>Ahmedabad</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 9"><b>Gandhinagar</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 10"><b>Jamnagar</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 11"><b>Rajkot</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 12"><b>Surat</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 13"><b>Vadodara</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 14"><b>Vapi</b></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="select">
                            <div class="select_check">
                                <div class="click">
                                    <a class="select_main" href="#" title="Select Course"><b>Board</b></a>
                                    <input type="hidden" name="search_2" />
                                </div>
                                <div class="click_detail"select_option_5>
                                    <div class="custom_scrollbar">
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>IB</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 2"><b>CBSE</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 3"><b>Jamnagar</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 4"><b>IGSCE</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 5"><b>ICSE</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 6"><b>GSEB</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 7"><b>MSBSHSE</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 8"><b>DBSE</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 9"><b>IB</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 10"><b>CBSE</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 11"><b>IGSCE</b></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="select">
                            <div class="select_check">
                                <div class="click">
                                    <a class="select_main" href="#" title="Select Course"><b>Medium</b></a>
                                    <input type="hidden" name="search_3" />
                                </div>
                                <div class="click_detail">
                                    <div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>English</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 2"><b>Gujarati</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 3"><b>Hindi</b></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="select">
                            <div class="select_check">
                                <div class="click">
                                    <a class="select_main" href="#" title="Select Course"><b>Grade</b></a>
                                    <input type="hidden" name="search_4" />
                                </div>
                                <div class="click_detail">
                                    <div class="custom_scrollbar">
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Jr. Kg.</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 2"><b>Sr. Kg.</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 3"><b>Grade 1</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 4"><b>Grade 2</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 5"><b>Grade 3</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 6"><b>Grade 4</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 7"><b>Grade 5</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 8"><b>Grade 6</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 9"><b>Grade 7</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 10"><b>Grade 8</b></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="select">
                            <div class="select_check">
                                <div class="click">
                                    <a class="select_main" href="#" title="Select Course"><b>Subject</b></a>
                                    <input type="hidden" name="search_5" />
                                </div>
                                <div class="click_detail">
                                    <div class="custom_scrollbar">
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Maths</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Science</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>English</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Physics</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Physics</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Visual Arts</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>French</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Maths</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>Science</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>English</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>ICT</b></a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="search_btn">
                        <button class="submit"></button>
                    </div>
                </div>                
            </div>
            <div class="container">
            	<div class="selected_filter">
                	<a href="#" title="Location">Location <i class="fa fa-close"></i></a> 
                    <a href="#" title="Grade">Grade <i class="fa fa-close"></i></a> 
                </div>
            </div>
        </div> -->
    <div id="content">
    	<div class="schools white_bg">
        	<div class="container">
            	<h2>Teacher’s Job Opening</h2>
                <div class="teacher_boxes clearfix">
                	@if($joblocation)
                	    @foreach($joblocation as $j)
	                    	<div class="teacher_box clearfix">
	                            <div class="img">
	                                <img src="{{asset('asset/images/teacher_job_1.png')}}" alt="">
	                            </div>
	                            <div class="img_detail">
	                                <h3>{{$j->school_name}}</h3>
	                                <div class="text">
	                                    <p><span>Subjects</span>{{$j->sub_name}}</p>
	                                    <p><span>Grade</span>1, 2, 3, 4</p>
	                                    <p><span>Board</span>{{$j->board}}</p>
	                                    <p><span>Medium</span>{{$j->medium}}</p>
	                                    <p><span>Location</span>{{$j->address}}</p>
	                                </div>
	                                <div class="view_job_details"><a href="{{ route('viewjobdetail' , ['id'=>$j->id])}}" title="View Job Details">View Job Details</a></div>
	                            </div>
	                        </div>
	                    @endforeach
                	@else($jobdetails)
	                	@foreach($jobdetails as $j)
	                    	<div class="teacher_box clearfix">
	                            <div class="img">
	                                <img src="{{asset('asset/images/teacher_job_1.png')}}" alt="">
	                            </div>
	                            <div class="img_detail">
	                                <h3>{{$j->school_name}}</h3>
	                                <div class="text">
	                                    <p><span>Subjects</span>{{$j->sub_name}}</p>
	                                    <p><span>Grade</span>1, 2, 3, 4</p>
	                                    <p><span>Board</span>{{$j->board}}</p>
	                                    <p><span>Medium</span>{{$j->medium}}</p>
	                                    <p><span>Location</span>{{$j->address}}</p>
	                                </div>
	                                <div class="view_job_details"><a href="#" title="View Job Details">View Job Details</a></div>
	                            </div>
	                        </div>
	                    @endforeach
	                @endif
                    <!-- <div class="teacher_box clearfix">
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
                    </div> -->
                    <!-- <div class="teacher_box clearfix">
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
                    </div> -->
                    <!-- <div class="teacher_box clearfix">
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
                    </div> -->
                    <!-- <div class="teacher_box clearfix">
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
                    </div> -->
                    <!-- <div class="teacher_box clearfix">
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
                    </div> -->
                    <!-- <div class="teacher_box clearfix">
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
                    </div> -->
                    <!-- <div class="teacher_box clearfix">
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
                    </div> -->
                </div>                    
                <div class="view_all">
                    @if (Auth::user()->type=='0')
                        <a href="{{ route('student') }}">Back</a>
                    @else(Auth::user()->type=='1')
                        <a href="{{ route('teacher') }}">Back</a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
<script type="text/javascript" src="{{ asset('asset/js/customjs/job_listing.js') }}"></script>
@endsection
@endsection
