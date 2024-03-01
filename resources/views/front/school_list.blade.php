@extends('layout.front.app')
@section('content')
<div id="wrap">
        <div id="sub_banner">
            <div class="container">
                <div class="sub_banner">
                    <h1>Student Resources</h1>
                    <div class="breadcumb">
                        <ul>
                            <li><a href="#" title="Home">Home</a></li>
                            <li><a href="#" title="Student Resources">Student Resources</a></li>                            
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
                                    <a class="select_main" href="#" title="Select Course"><b>Fees ( INR )</b></a>
                                    <input type="hidden" name="search_5" />
                                </div>
                                <div class="click_detail">
                                    <div class="custom_scrollbar">
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>10,000 - 50,000</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 2"><b>50,000 - 1,00,000</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 3"><b>1,00,000 - 1,50,000</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 4"><b>1.5Lac - 2Lac</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 5"><b>2,00,000 - 2,50,000</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 6"><b>2,50,000 - 3,00,000</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 7"><b>3,00,000 - 3,50,000</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 8"><b>10,000 - 50,000</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 9"><b>50,000 - 1,00,000</b></a></div>
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
                                    <a class="select_main" href="#" title="Select Course"><b>Fees ( INR )</b></a>
                                    <input type="hidden" name="search_5" />
                                </div>
                                <div class="click_detail">
                                    <div class="custom_scrollbar">
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 1"><b>10,000 - 50,000</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 2"><b>50,000 - 1,00,000</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 3"><b>1,00,000 - 1,50,000</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 4"><b>1.5Lac - 2Lac</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 5"><b>2,00,000 - 2,50,000</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 6"><b>2,50,000 - 3,00,000</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 7"><b>3,00,000 - 3,50,000</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 8"><b>10,000 - 50,000</b></a></div>
                                        <div class="select_row"><a href="#" class="select_option" data-value="Location 9"><b>50,000 - 1,00,000</b></a></div>
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
            <div class="schools">
                <div class="container">
                    @if($schoolviewplace)
                        <h2>Schools in {{$schoolviewplace->address}}</h2>
                    @else()
                        <h2>School</h2>
                    @endif
                    <div class="school_boxes clearfix">
                        <!-- <div class="school_box">
                            <div class="img">
                                <img src="images/school_1.jpg" alt="">
                                <div class="admission_open">Admission Open</div>
                            </div>
                            <div class="img_detail">
                                <div class="top">
                                    <h3>AIS - Ahmedabad International School</h3>
                                    <div class="text">
                                        <p><span>Grade</span>1</p>
                                        <p><span>Board</span>IB</p>
                                        <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                        <p><span>Medium</span>English</p>
                                    </div>
                                </div>
                                <div class="view_school_details"><a href="#" title="View School Details">View School Details</a></div>
                            </div>
                        </div> -->
                        <!-- <div class="school_box">
                            <div class="img">
                                <img src="images/school_1.jpg" alt="">
                            </div>
                            <div class="img_detail">
                                <div class="top">
                                    <h3>AIS - Ahmedabad International School</h3>
                                    <div class="text">
                                        <p><span>Grade</span>1</p>
                                        <p><span>Board</span>IB</p>
                                        <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                        <p><span>Medium</span>English</p>
                                    </div>
                                </div>
                                <div class="view_school_details"><a href="#" title="View School Details">View School Details</a></div>
                            </div>
                        </div> -->
                        <!-- <div class="school_box">
                            <div class="img">
                                <img src="images/school_1.jpg" alt="">
                            </div>
                            <div class="img_detail">
                                <div class="top">
                                    <h3>AIS - Ahmedabad International School</h3>
                                    <div class="text">
                                        <p><span>Grade</span>1</p>
                                        <p><span>Board</span>IB</p>
                                        <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                        <p><span>Medium</span>English</p>
                                    </div>
                                </div>
                                <div class="view_school_details"><a href="#" title="View School Details">View School Details</a></div>
                            </div>
                        </div> -->
                        <!-- <div class="school_box">
                            <div class="img">
                                <img src="images/school_1.jpg" alt="">
                                <div class="admission_open">Admission Open</div>
                            </div>
                            <div class="img_detail">
                                <div class="top">
                                    <h3>AIS - Ahmedabad International School</h3>
                                    <div class="text">
                                        <p><span>Grade</span>1</p>
                                        <p><span>Board</span>IB</p>
                                        <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                        <p><span>Medium</span>English</p>
                                    </div>
                                </div>
                                <div class="view_school_details"><a href="#" title="View School Details">View School Details</a></div>
                            </div>
                        </div> -->
                        <!-- <div class="school_box">
                            <div class="img">
                                <img src="images/school_1.jpg" alt="">
                            </div>
                            <div class="img_detail">
                                <div class="top">
                                    <h3>AIS - Ahmedabad International School</h3>
                                    <div class="text">
                                        <p><span>Grade</span>1</p>
                                        <p><span>Board</span>IB</p>
                                        <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                        <p><span>Medium</span>English</p>
                                    </div>
                                </div>
                                <div class="view_school_details"><a href="#" title="View School Details">View School Details</a></div>
                            </div>
                        </div> -->
                        <!-- <div class="school_box">
                            <div class="img">
                                <img src="images/school_1.jpg" alt="">
                            </div>
                            <div class="img_detail">
                                <div class="top">
                                    <h3>AIS - Ahmedabad International School</h3>
                                    <div class="text">
                                        <p><span>Grade</span>1</p>
                                        <p><span>Board</span>IB</p>
                                        <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                        <p><span>Medium</span>English</p>
                                    </div>
                                </div>
                                <div class="view_school_details"><a href="#" title="View School Details">View School Details</a></div>
                            </div>
                        </div> -->
                        <!-- <div class="school_box">
                            <div class="img">
                                <img src="images/school_1.jpg" alt="">
                                <div class="admission_open">Admission Open</div>
                            </div>
                            <div class="img_detail">
                                <div class="top">
                                    <h3>AIS - Ahmedabad International School</h3>
                                    <div class="text">
                                        <p><span>Grade</span>1</p>
                                        <p><span>Board</span>IB</p>
                                        <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                        <p><span>Medium</span>English</p>
                                    </div>
                                </div>
                                <div class="view_school_details"><a href="#" title="View School Details">View School Details</a></div>
                            </div>
                        </div> -->
                        <!-- <div class="school_box">
                            <div class="img">
                                <img src="images/school_1.jpg" alt="">
                            </div>
                            <div class="img_detail">
                                <div class="top">
                                    <h3>AIS - Ahmedabad International School</h3>
                                    <div class="text">
                                        <p><span>Grade</span>1</p>
                                        <p><span>Board</span>IB</p>
                                        <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                        <p><span>Medium</span>English</p>
                                    </div>
                                </div>
                                <div class="view_school_details"><a href="#" title="View School Details">View School Details</a></div>
                            </div>
                        </div> -->
                        <!-- <div class="school_box">
                            <div class="img">
                                <img src="images/school_1.jpg" alt="">
                            </div>
                            <div class="img_detail">
                                <div class="top">
                                    <h3>AIS - Ahmedabad International School</h3>
                                    <div class="text">
                                        <p><span>Grade</span>1</p>
                                        <p><span>Board</span>IB</p>
                                        <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                        <p><span>Medium</span>English</p>
                                    </div>
                                </div>
                                <div class="view_school_details"><a href="#" title="View School Details">View School Details</a></div>
                            </div>
                        </div> -->
                        <!-- <div class="school_box">
                            <div class="img">
                                <img src="images/school_1.jpg" alt="">
                                <div class="admission_open">Admission Open</div>
                            </div>
                            <div class="img_detail">
                                <div class="top">
                                    <h3>AIS - Ahmedabad International School</h3>
                                    <div class="text">
                                        <p><span>Grade</span>1</p>
                                        <p><span>Board</span>IB</p>
                                        <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                        <p><span>Medium</span>English</p>
                                    </div>
                                </div>
                                <div class="view_school_details"><a href="#" title="View School Details">View School Details</a></div>
                            </div>
                        </div> -->
                        <!-- <div class="school_box">
                            <div class="img">
                                <img src="images/school_1.jpg" alt="">
                            </div>
                            <div class="img_detail">
                                <div class="top">
                                    <h3>AIS - Ahmedabad International School</h3>
                                    <div class="text">
                                        <p><span>Grade</span>1</p>
                                        <p><span>Board</span>IB</p>
                                        <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                        <p><span>Medium</span>English</p>
                                    </div>
                                </div>
                                <div class="view_school_details"><a href="#" title="View School Details">View School Details</a></div>
                            </div>
                        </div> -->
                        <!-- <div class="school_box">
                            <div class="img">
                                <img src="images/school_1.jpg" alt="">
                            </div>
                            <div class="img_detail">
                                <div class="top">
                                    <h3>AIS - Ahmedabad International School</h3>
                                    <div class="text">
                                        <p><span>Grade</span>1</p>
                                        <p><span>Board</span>IB</p>
                                        <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                        <p><span>Medium</span>English</p>
                                    </div>
                                </div>
                                <div class="view_school_details"><a href="#" title="View School Details">View School Details</a></div>
                            </div>
                        </div> -->
                        <!-- <div class="school_box">
                            <div class="img">
                                <img src="images/school_1.jpg" alt="">
                                <div class="admission_open">Admission Open</div>
                            </div>
                            <div class="img_detail">
                                <div class="top">
                                    <h3>AIS - Ahmedabad International School</h3>
                                    <div class="text">
                                        <p><span>Grade</span>1</p>
                                        <p><span>Board</span>IB</p>
                                        <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                        <p><span>Medium</span>English</p>
                                    </div>
                                </div>
                                <div class="view_school_details"><a href="#" title="View School Details">View School Details</a></div>
                            </div>
                        </div> -->
                        <!-- <div class="school_box">
                            <div class="img">
                                <img src="images/school_1.jpg" alt="">
                            </div>
                            <div class="img_detail">
                                <div class="top">
                                    <h3>AIS - Ahmedabad International School</h3>
                                    <div class="text">
                                        <p><span>Grade</span>1</p>
                                        <p><span>Board</span>IB</p>
                                        <p><span>Location</span>Bodakdev - Ahmedabad</p>
                                        <p><span>Medium</span>English</p>
                                    </div>
                                </div>
                                <div class="view_school_details"><a href="#" title="View School Details">View School Details</a></div>
                            </div>
                        </div> -->
                        @if($places)
                            @foreach($places as $place)
                            <div class="school_box">
                                <div class="img">
                                    <img src="{{asset('asset/images/school_1.jpg')}}" alt="">
                                    @if($place->is_admission_open=='1')
                                        <div class="admission_open">Admission open</div> 
                                    @endif
                                </div>
                                <div class="img_detail">
                                    <div class="top">
                                        <h3>{{$place->name}}</h3>
                                        <div class="text">
                                            <p><span>Grade</span>{{$place->grade}}</p>
                                            <p><span>Board</span>{{$place->board}}</p>
                                            <p><span>Location</span>{{$place->address}}</p>
                                            <p><span>Medium</span>{{$place->medium}}</p>
                                        </div>
                                    </div>
                                    <div class="view_school_details"><a href="{{ route('school', ['id' => $place->id]) }}" title="View School Details">View School Details</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else($viewplace)
                            @foreach($viewplace as $place)
                            <div class="school_box">
                                <div class="img">
                                    <img src="{{asset('asset/images/school_1.jpg')}}" alt="">
                                    @if($place->is_admission_open=='1')
                                            <div class="admission_open">Admission open</div> 
                                    @endif
                                </div>
                                <div class="img_detail">
                                    <div class="top">
                                        <h3>{{$place->name}}</h3>
                                        <div class="text">
                                            <p><span>Grade</span>{{$place->grade}}</p>
                                            <p><span>Board</span>{{$place->board}}</p>
                                            <p><span>Location</span>{{$place->address}}</p>
                                            <p><span>Medium</span>{{$place->medium}}</p>
                                        </div>
                                    </div>
                                    <div class="view_school_details"><a href="{{ route('school', ['id' => $place->id]) }}" title="View School Details">View School Details</a></div>
                                </div>
                            </div>
                            @endforeach 
                        @endif
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


<!-- @section('js')
<script type="text/javascript" src="{{ asset('asset/js/customjs/school_admission_form.js') }}"></script>
@endsection -->
@endsection
