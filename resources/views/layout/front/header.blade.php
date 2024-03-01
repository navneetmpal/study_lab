<header id="header">
	<div class="header">
    	<div class="container">
        	<div class="logo"><a href="#" title="StudyLabz"><img src="{{asset('asset/images/logo.png')}}" alt="StudyLabz"></a></div>
            <!-- <div class="city">
            	<div class="select">
                    <div class="select_check">
                        <div class="click">
                            <a class="select_main" href="#"  title="Select Course"><span>City : </span><b>Ahmedabad</b>, Gujarat</a>
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
            </div> -->
            @if (Auth::check())
                <div class="right">
                	<div class="profile">
                    	<div class="click"><a href="#" title=""></a></div>
                            <div class="click_detail">
                                <div class="row clearfix">
                                	<span>
                                        <!-- Teacher -->
                                        <p>Welcome, {{ Auth::user()->name }}</p>
                                    </span>
                                    <!-- <a href="#" title="Login">Login</a>
                                    <a href="#" title="Register">Register</a>
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit">Logout</button>
                                    </form> -->
                                </div>
                                <div class="row clearfix">
                                    <!-- <span>Student</span> -->
                                    <!-- <a href="#" title="Login">Login</a> -->
                                    <!-- <a href="#" title="Register">Register</a> -->
                                    <form action="{{ route('logout') }}" method="post">
                                        @csrf
                                        <button type="submit"><span>Logout</span></button>
                                    </form>
                                </div>
                            </div>
                    </div>
                   <!--  <div class="links">
                    	<a href="#" title="Student Resources">Student Resources</a>
                        <a href="#" title="Teacher Resources">Teacher Resources</a>
                    </div> -->
                </div>
            @endif
        </div>
    </div>
</header>