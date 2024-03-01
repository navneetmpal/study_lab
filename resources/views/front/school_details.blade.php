@extends('layout.front.app')
@section('content')
<div id="wrap">
    <div id="sub_banner" class="gradient">
        <div class="container">
            <div class="sub_banner">
                <h1>School Details</h1>
                <div class="breadcumb">
                    <ul>
                        <li><a href="{{route('index')}}" title="Home">Home</a></li>
                        <li><a href="#" title="Student Resources">Student Resources</a></li>                            
                        <li>School</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>        
    <div id="content">
        <div class="detail_page">
            <div class="container">
                <div class="back"><a href="{{route('place')}}" title="Back to School Listing">Back to School Listing</a></div>
                <div class="apply clearfix">
                    <div class="img"><img src="{{asset('asset/images/teacher_job_1.png')}}" alt="AIS - Ahmedabad International School"></div>
                    <div class="img_detail">{{$details->name}}</div>
                        @if($details->is_admission_open=='1')
                            <div class="apply_btn">
                                <a href="{{ route('admission', ['id' => $details->id]) }}" title="Apply for Admission">Apply for Admission</a>
                            </div> 
                        @endif
                </div>
                <div class="row clearfix">
                    <div class="left">
                        <div class="box">
                            <div class="school_detail_carousel owl-carousel owl-theme">
                                <div class="item"><a data-fancybox="photogallery" href="{{asset('asset/images/school_1.jpg')}}" title=""><img src="{{asset('asset/images/school_1.jpg')}}" alt=""></div>
                                <div class="item"><a data-fancybox="photogallery" href="images/school_1.jpg" title=""><img src="{{asset('asset/images/school_1.jpg')}}" alt=""></a></div>
                                <div class="item"><a data-fancybox="photogallery" href="images/school_1.jpg" title=""><img src="{{asset('asset/images/school_1.jpg')}}" alt=""></a></div>
                                <div class="item"><a data-fancybox="photogallery" href="images/school_1.jpg" title=""><img src="{{asset('asset/images/school_1.jpg')}}" alt=""></a></div>
                            </div>
                        </div>
                        <div class="box mobile-hide" style="height:250px;">
                            <div class="map">
                                {!! $details->address_url !!}
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="box">
                            <div class="icon_boxes">
                                <div class="icon_box">
                                    <p><span><img src="{{asset('asset/images/icon1.png')}}" alt=""></span><strong>Board :  </strong>{{$details->board}}</p>
                                </div>
                                <div class="icon_box">
                                    <p><span><img src="{{asset('asset/images/icon2.png')}}" alt=""></span><strong>Grades :  </strong>{{$details->grade}}</p>
                                </div>
                                <div class="icon_box">
                                    <p><span><img src="{{asset('asset/images/icon3.png')}}" alt=""></span><strong>Medium :  </strong>{{$details->medium}}</p>
                                </div>
                                <div class="icon_box">
                                    <p><span><img src="{{asset('asset/images/icon4.png')}}" alt=""></span><strong>Fees :  </strong>Rs. 1,20,000*  -  Rs. 2,68,000*</p>
                                </div>
                                <div class="icon_box">
                                    <p><span><img src="{{asset('asset/images/icon5.png')}}" alt=""></span><strong>Student Ratio :  </strong>1 Teacher  :  18 Children ( Per Class )</p>
                                </div>
                                <div class="icon_box">
                                    <p><span><img src="{{asset('asset/images/icon6.png')}}" alt=""></span><strong>Location :  </strong>{{$details->address}}</p>
                                </div>
                                <div class="icon_box">
                                    <p><span><img src="{{asset('asset/images/icon7.png')}}" alt=""></span><strong>Rating :  </strong>5 / 5 
                                        <b>
                                            <a href="#" title="1"><img src="{{asset('asset/images/star.png')}}" alt=""></a>
                                            <a href="#" title="2"><img src="{{asset('asset/images/star.png')}}" alt=""></a>
                                            <a href="#" title="3"><img src="{{asset('asset/images/star.png')}}" alt=""></a>
                                            <a href="#" title="4"><img src="{{asset('asset/images/star.png')}}" alt=""></a>
                                            <a href="#" title="5"><img src="{{asset('asset/images/star.png')}}" alt=""></a>
                                        </b>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="box">
                            <div class="icon_boxes">
                                <div class="icon_box">
                                    <p><span><img src="{{asset('asset/images/icon8.png')}}" alt=""></span><strong>Contact Person :  </strong>Mr. XYG</p>
                                </div>
                                <div class="icon_box">
                                    <p><span><img src="{{asset('asset/images/icon9.png')}}" alt=""></span><strong>Contact No. :  </strong><a href="tel:+910000000000">+91 00000 00000</a></p>
                                </div>
                                <div class="icon_box">
                                    <p><span><img src="{{asset('asset/images/icon10.png')}}" alt=""></span><strong>Email ID :  </strong><a href="mailto:contact@school.net">contact@school.net</a></p>
                                </div>                                    
                            </div>
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
                <div class="row mobile-show">
                    <div class="box">
                        <div class="map">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.709771110033!2d72.51044061542345!3d23.034426221664177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84b72ac235db%3A0x412d4c0424522cb0!2sAIS%20School!5e0!3m2!1sen!2sin!4v1676574278005!5m2!1sen!2sin" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="box">
                        <form method="POST" enctype="multipart/form-data" action="{{route('review', ['id'=>$details->id])}}" autocomplete="off">
                            @csrf
                            <div class="write_review">
                                <h3>Give your Rating : 
                                    <span>
                                        <input value="1" type="radio" name="star"/>
                                        <input value="2" type="radio" name="star"/>
                                        <input value="3" type="radio" name="star"/>
                                        <input value="4" type="radio" name="star"/>
                                        <input value="5" type="radio" name="star"/>
                                        <!-- <img src="{{asset('asset/images/star_g.png')}}" alt="">
                                        <img src="{{asset('asset/images/star_g.png')}}" alt="">
                                        <img src="{{asset('asset/images/star_g.png')}}" alt="">
                                        <img src="{{asset('asset/images/star_g.png')}}" alt="">
                                        <img src="{{asset('asset/images/star_g.png')}}" alt=""> -->
                                    </span>
                                </h3>
                                <h4>Share your Review :</h4>
                                <div class="form">
                                    <div class="sub_row">
                                        <div class="columns clearfix">
                                            <div class="col">
                                                <label>Name *</label>
                                                <input type="text" class="input_text" placeholder="e.g. John Smith" name="name">
                                            </div>
                                            <!-- <div class="col">
                                                <label>Email *</label>
                                                <input type="text" class="input_text" placeholder="e.g. john@emailaddress.com" name="email">
                                            </div> -->
                                            <!-- <div class="col">
                                                <label>Contact No.</label>
                                                <input type="text" class="input_text" placeholder="e.g. 123456789" name="contact">
                                            </div> -->
                                        </div>
                                    </div>                                    
                                    <div class="sub_row clearfix">
                                        <div class="col full">
                                            <label>Write your review *</label>
                                            <textarea class="input_text area" placeholder="e.g. Message" name= "review"></textarea>
                                        </div>
                                    </div>
                                    <div class="sub_row btn">
                                        <input type="submit" class="submit" value="Submit Review">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="box">
                        <div class="user_review open">
                            <h3>User Reviews</h3>
                            <div class="blocks">
                                @foreach($review as $r)
                                    <div class="block">
                                        <p>{{$r->review}}</p>
                                        <div class="star">
                                            @if($r->star=='1')
                                                <img src="{{asset('asset/images/star.png')}}" alt="">
                                            @elseif($r->star=='2')
                                                <img src="{{asset('asset/images/star.png')}}" alt="">
                                                <img src="{{asset('asset/images/star.png')}}" alt="">
                                            @elseif($r->star=='3')   
                                                <img src="{{asset('asset/images/star.png')}}" alt="">
                                                <img src="{{asset('asset/images/star.png')}}" alt="">
                                                <img src="{{asset('asset/images/star.png')}}" alt="">
                                            @elseif($r->star=='4')   
                                                <img src="{{asset('asset/images/star.png')}}" alt="">
                                                <img src="{{asset('asset/images/star.png')}}" alt="">
                                                <img src="{{asset('asset/images/star.png')}}" alt="">
                                                <img src="{{asset('asset/images/star.png')}}" alt="">
                                            @elseif($r->star=='5')   
                                                <img src="{{asset('asset/images/star.png')}}" alt="">
                                                <img src="{{asset('asset/images/star.png')}}" alt="">
                                                <img src="{{asset('asset/images/star.png')}}" alt="">
                                                <img src="{{asset('asset/images/star.png')}}" alt="">
                                                <img src="{{asset('asset/images/star.png')}}" alt="">
                                            @endif
                                        </div>
                                        <div class="name"><span></span>{{$r->name}}</div>
                                    </div>
                                @endforeach
                                <!-- <div class="block">
                                    <p>This is the best school for IB Board. I am very happy with  teaching and infrastructure of the school.</p>
                                    <div class="star"><img src="{{asset('asset/images/star.png')}}" alt=""><img src="{{asset('asset/images/star.png')}}" alt=""><img src="{{asset('asset/images/star.png')}}" alt=""><img src="{{asset('asset/images/star.png')}}" alt=""><img src="{{asset('asset/images/star.png')}}" alt=""></div>
                                    <div class="name"><span></span>Mr. ABC</div>
                                </div> -->
                                <!-- <div class="block">
                                    <p>This is the best school for IB Board. I am very happy with  teaching and infrastructure of the school.</p>
                                    <div class="star"><img src="{{asset('asset/images/star.png')}}" alt=""><img src="{{asset('asset/images/star.png')}}" alt=""><img src="{{asset('asset/images/star.png')}}" alt=""><img src="{{asset('asset/images/star.png')}}" alt=""><img src="{{asset('asset/images/star.png')}}" alt=""></div>
                                    <div class="name"><span></span>Mr. ABC</div>
                                </div> -->
                                <div class="more"><a href="#" title="Show More Reviews">Show More Reviews</a></div>
                            </div>                                
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="two_btn">
                        @if($details->is_admission_open=='1')
                            <a href="{{ route('admission', ['id' => $details->id]) }}" title="Apply for Admission">Apply for Admission</a>
                        @endif
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
    </div>

@section('js')
<script type="text/javascript" src="{{ asset('asset/js/customjs/school_details.js') }}"></script>
<script src="{{asset('asset/js/owl_carousel.js')}}"></script>
@endsection
@endsection
